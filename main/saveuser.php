<?php
  session_start();
  include('../connection.php');
  $fname = $_POST['f_name'];
  $lname = $_POST['l_name'];
  $uname = $_POST['user_name'];
  $pass = sha1($_POST['password']);
  $role = $_POST['role'];
  // query
//check if user exists by username if not user error below.
$userexist_err ="User name exists, try another one";
try {
    // Initialize query with prepared statements to mitigate sql injection
    $stmt = $conn->prepare("SELECT user_name FROM user WHERE user_name='$uname'");
    // execute query
    $stmt->execute();

    // fetch the data and assign to result
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($result) {
        // only take some value data from the returned information
        $_SESSION["USERNAME_EXIST"] = $userexist_err;
        // return adduser page and display the error
        header("location: adduser.php?fn=$fname&ln=$lname");
    } else {
        // save user if username doesnt exist
        //do your write to the database filename and other details   
    $sql = "INSERT INTO user (f_name, l_name, user_name,pass_word, role) VALUES (:fname,:lname,:uname,:pass,:role)";
    $q = $conn->prepare($sql);
    $q->execute(array(':fname'=>$fname,':lname'=>$lname,':uname'=>$uname,':pass'=>$pass,':role'=>$role));
    header("location: users.php");
	
    }
} catch(PDOException $e) {
    // return PDOException error (for testing, remove on production)
    $_SESSION["USERNAME_EXIST"] = "Error: " . $e->getMessage();
    // // return adduser page and display the error
    header("location: adduser.php?fn=$fname&ln=$lname");
}
  
    
?>



// set error message
// return login error 

if $result has no information on data passed by user
				$_SESSION["USERNAME_EXIST"] = $userexist_err;
				// return to login page and display the error
				header("Location: index.php");

                tch(PDOException $e) {
			// return PDOException error (for testing, remove on production)
			$_SESSION["LOGIN_ERROR"] = "Error: " . $e->getMessage();
			// // return login page and display the error
			header("location: index.php"