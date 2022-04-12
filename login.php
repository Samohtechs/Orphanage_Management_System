<?php
	// start session
	session_start();
	// require connection to the database
	require_once('connection.php');

	// set error message
	$login_err = "Wrong username and/or password";

	// if the login button is clicked from the form
	if(isset($_POST['loginBtn'])) {
		// get data from the login form
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		// Encrypt password with sha1() before perfoming query. 
		// make sure database field holds value >=40 and not less for the password and type varchar eg varchar(55)
		// since sha1() hashes data to 40 characters long
		 $pass = sha1($pass);

		try {
			// Initialize query with prepared statements to mitigate sql injection
			$stmt = $conn->prepare("SELECT * FROM user WHERE user_name='$uname' AND pass_word='$pass' LIMIT 1");
			// execute query
			$stmt->execute();

			// fetch the data and assign to result
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if($result) {
				// only take some value data from the returned information
				foreach($result as $rslt) {
					$_SESSION['SESS_MEMBER_ID'] = $rslt['f_name'] . ' ' . $rslt['l_name'];
					$_SESSION['SESS_POSITION'] = $rslt['role'];
					if($_SESSION['SESS_POSITION']=="admin"){
						header('Location: main/index.php');
					}
					else{
						header('Location: main/childrens-user.php');
					}

					// then redirect user to home page
					
				}
			} else {
				// return login error if $result has no information on data passed by user
				$_SESSION["LOGIN_ERROR"] = $login_err;
				// return to login page and display the error
				header("Location: index.php");
			}
		} catch(PDOException $e) {
			// return PDOException error (for testing, remove on production)
			$_SESSION["LOGIN_ERROR"] = "Error: " . $e->getMessage();
			// // return login page and display the error
			header("location: index.php");
		}

		// close database connection to release unused resources
		$conn = null;
	}

?>
