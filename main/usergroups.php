<?php 
    require_once('strings/global_title.php');
    require_once('auth.php');
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Page title -->
    <title> <?php echo $site_title; ?> </title>
    <!-- End Page title -->
    <!-- Style sheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
        body {
        padding-top: 60px;
        padding-bottom: 40px;
        }
        .sidebar-nav {
        padding: 9px 0;
        }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
    <!-- End Style sheets -->
    <!-- Scriptps -->
    <script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/application.js" type="text/javascript" charset="utf-8"></script>
    <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="lib/jquery.js" type="text/javascript"></script>
    <script src="src/facebox.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
        $('a[rel*=facebox]').facebox({
            loadingImage : 'src/loading.gif',
            closeImage   : 'src/closelabel.png'
        })
        })
    </script>
    <!-- End Scripts -->
</head>

<!-- Sidebar timer script -->
<script language="javascript" type="text/javascript">
  <!-- Begin
  var timerID = null;
  var timerRunning = false;
  function stopclock (){
    if(timerRunning)
    clearTimeout(timerID);
    timerRunning = false;
  }
  function showtime () {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds()
    var timeValue = "" + ((hours >12) ? hours -12 :hours)
    if (timeValue == "0") timeValue = 12;
    timeValue += ((minutes < 10) ? ":0" : ":") + minutes
    timeValue += ((seconds < 10) ? ":0" : ":") + seconds
    timeValue += (hours >= 12) ? " P.M." : " A.M."
    document.clock.face.value = timeValue;
    timerID = setTimeout("showtime()",1000);
    timerRunning = true;
  }
  function startclock() {
    stopclock();
    showtime();
  }
  window.onload=startclock;
</script>	
<!-- End Sidebar timer script -->

<body>
    <!--The top nav bar  -->
    <?php include('navfixed.php');?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2">
                <div class="well sidebar-nav">
                    <!-- The side sidebar -->
                    <?php require_once('navigation/nav.html'); ?>             
                </div><!--/.well -->
            </div><!--/span-->
            <div class="span10">
                <div class="contentheader">
                    <i class="icon-table"></i> Manage Users
                </div>
                <ul class="breadcrumb">
                    
                </ul>
                <div style="margin-top: -19px; margin-bottom: 21px;">
                    <a href="users.php">
                        <button class="btn btn-default btn-large" style="float: left;">
                            <i class="icon icon-circle-arrow-left icon-large"></i> Back
                        </button>
                    </a>
                    
                    <form action=" " method="post" enctype="multipart/form-data">
                        <center>
                            <h4> 
                                <i class="icon-edit icon-large"> </i> User Positions
                            </h4>
                        </center>
                            <!-- Table to show all users -->
                            <table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left; border=0;">    
                                <thead>
                                    <tr>
                                    
                                        <th width="20%"> ID</th>
                                        <th width="60%"> Possition Role</th>
                                        <th width="20%"> Action</th>

                                    </tr>
                                </thead> 
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a title="Click to edit the user" href="edituser.php?id=<?php echo $row['id']; ?>">
                                                <button class="btn btn-warning btn-mini"><i class="icon-edit"></i> Edit</button>
                                            </a>
                                            <a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete">
                                                <button class="btn btn-danger btn-mini"><i class="icon-trash"></i> Delete</button>
                                            </a>
                                        </td>
                                    </tr> 
                                </tbody> 
                            </table>
                            <br>
                         <!-- <center>
                             <div>
                                 <button class="btn btn-success btn-block btn-large" style="width:264px;"><i class="icon icon-save icon-large"></i> Save</button>
                             </div> 
                        </center>          -->
                                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include('footer.php');?>
</html>
</body>    
