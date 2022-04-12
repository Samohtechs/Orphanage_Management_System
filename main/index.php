<?php
	include('../connection.php');
	require_once('auth.php');
	include('strings/global_title.php');
	include('navfixed.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title> <?php echo $site_title; ?> </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
    .sidebar-nav {
        padding: 9px 0;
    }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="lib/jquery.js" type="text/javascript"></script>
    <script src="src/facebox.js" type="text/javascript"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('a[rel*=facebox]').facebox({
            loadingImage: 'src/loading.gif',
            closeImage: 'src/closelabel.png'
        })
    })
    </script>

    <?php
		function createRandomPassword() {
			$chars = "003232303232023232023456789";
			srand((double)microtime()*1000000);
			$i = 0;
			$pass = '' ;
			while ($i <= 7) {
				$num = rand() % 33;

				$tmp = substr($chars, $num, 1);

				$pass = $pass . $tmp;

				$i++;
			}
			return $pass;
		}
		$finalcode='RS-'.createRandomPassword();
	?>

    <script language="javascript" type="text/javascript">
    <!-- Begin
    var timerID = null;
    var timerRunning = false;

    function stopclock() {
        if (timerRunning)
            clearTimeout(timerID);
        timerRunning = false;
    }

    function showtime() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds()
        var timeValue = "" + ((hours > 12) ? hours - 12 : hours)
        if (timeValue == "0") timeValue = 12;
        timeValue += ((minutes < 10) ? ":0" : ":") + minutes
        timeValue += ((seconds < 10) ? ":0" : ":") + seconds
        timeValue += (hours >= 12) ? " P.M." : " A.M."
        document.clock.face.value = timeValue;
        timerID = setTimeout("showtime()", 1000);
        timerRunning = true;
    }

    function startclock() {
        stopclock();
        showtime();
    }
    window.onload = startclock;
    // End 
    -->
    </script>
</head>

<body>
    <?php
		$position=$_SESSION['SESS_POSITION'];
		if($position!='admin') {
	?>
    <a href="logout.php">Logout</a>
    <?php
	}
	if($position=='admin') {
	?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2">
                <div class="well sidebar-nav">
                    <?php require_once('navigation/nav.html'); ?>
                </div>
            </div>
            <!--/span-->
            <div class="span10">
               <!-- <div class="contentheader">
                    <i class="icon-"></i> Dashboard
                </div>  -->
                <ul class="breadcrumb">
                    <li class="active">Dashboard</li>
                </ul>
                <font style=" font:bold 44px 'Aleo'; color:#04df37;">
                    <center><?php echo $site_title; ?></center>
                </font>


                <div id="mainmain">

                    <a href="childrens.php">
                        <i class="icon-group icon-2x"></i> <br>
                        <!-- Return Total number of orphans -->
                        <?php 
							$result = $conn->prepare("SELECT * FROM children ORDER BY id DESC");
							$result->execute();
							$rowcount = $result->rowcount();
							echo $rowcount; // return total rows
						?>
                        Childrens
                    </a>
					
                    <a href="addchild.php"><i class="icon-pencil icon-2x"></i><br> Add Child</a>

                    <a href="users.php">
                        <i class="icon-user icon-2x"></i><br>
                        <!-- Return total number of users -->
                        <!-- </?php
                            $result = $conn->prepared("SELECT * FROM user ORDER BY id DESC");
                            $result->execute(); 
                            $rowcount = $result->rowcount();
                            echo $rowcount; //return tatal rows
                        ?>  -->
                        Users
                    </a>
					
                    <?php
					}
					?>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </div>
</body>
<?php include('footer.php'); ?>

</html>