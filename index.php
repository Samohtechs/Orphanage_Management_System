<?php
	session_start();
	require_once('main/strings/global_title.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title> <?php echo $site_title; ?> </title>
    <link rel="shortcut icon" href="main/images/pos.jpg">
    <link href="main/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css">
    <link rel="stylesheet" href="/main/css/font-awesome.min.css">

    <style type="text/css">
    body {
        background: #cccccc url("main/img/bg/DarEsSalaam.jpg") no-repeat;
        background-size: cover;
        padding-top: 60px;
        padding-bottom: 40px;
    }

    .sidebar-nav {
        padding: 9px 0;
    }
    </style>

    <link href="main/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="style.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="container-fluid">
        <div class="row-fluid" style="opacity: 0.9;">
            <div>
                <div id="login">
                    <form action="login.php" method="post">
                        <font style="font:bold 20px 'Aleo'; color:#fff;">
                            <center>CHAKUWAMA ORPHANAGE CENTER</center>
                        </font>
                        <br>
                        <div class="input-prepend">
                            <input style="height:35px;" type="text" name="uname" Placeholder="Username" required />
                        </div>
                        <br />
                        <div class="input-prepend">
                            <input style="height:35px;" type="password" name="pass" Placeholder="Password" required />
                        </div>
                        <br>
                        <div class="qwe">
                            <center>
                            <input class="btn btn-large btn-primary btn-block pull-right" name='loginBtn' type="submit" value="LOGIN"/>
                            </center>
                        </div>
                    </form>
                </div>
                <p class="p">
                    <?php
						// if there is any error then display it
						if(isset($_SESSION['LOGIN_ERROR']))
                           {
							 $err = $_SESSION['LOGIN_ERROR'];
							echo 
                            "<center>
								<span class='alert alert-secondary' style='color: black; align: center;'>
								$err
								</span>
							</center>";
                         // end echo
						}
					?>
                </p>
            </div>
        </div>
    </div>

</body>

</html>

<?php
	// clear error message
	unset($_SESSION["LOGIN_ERROR"]);
?>