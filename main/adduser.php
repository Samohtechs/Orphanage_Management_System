<?php include('header.php');?>
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

                    <?php
						// if there is any error then display it
						if(!isset($_SESSION['USERNAME_EXIST'])){?>
      <form action="saveuser.php" method="post" enctype="multipart/form-data">
      
          <center>
            <h4> <i class="icon-edit icon-large"> </i> Add New User </h4>
          </center>
          <hr>
          <center>
            <div style="align: left">
              <div id="ac">
                <br><br> <br>
                <input type="text" style="width:265px; height:30px;"  name="f_name" Required placeholder="Enter First Name"/><br>
                <input type="text" style="width:265px; height:30px;"  name="l_name" Required placeholder="Enter Last Name"/><br>
                <input type="text" style="width:265px; height:30px;"  name="user_name" Required placeholder="Enter User Name"/><br>                
                <input type="password" style="width:265px; height:30px;"  name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Must have atleast one  number an upper and lowercase letter, and at least length of 8" Required placeholder="User Password"/><br>
                <select style="width:265px; height:30px;"  name="role" Required placeholder="Choose Role">
                <option value="admin">Admin</option>
                <option value="staff">Staff</option>
                </select><br>
                <div>
                  <button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
                </div>
              </div>
            </div>
          </center>
        </div>
    </form>
            <?php
            }
            else{
              $fn = $_GET['fn'];
              $ln = $_GET['ln'];
							$err = $_SESSION['USERNAME_EXIST'];
              ?>

              <form action="saveuser.php" method="post" enctype="multipart/form-data">
      
              <center>
                <h4> <i class="icon-edit icon-large"> </i> Add New User </h4>
              </center>
              <hr>
              <center>
                <div style="align: left">
                  <div id="ac">
                    <br><br> <br>
                    <input type="text" style="width:265px; height:30px;"  name="f_name" Required value="<?php echo $fn; ?>" placeholder="Enter First Name"/><br>
                    <input type="text" style="width:265px; height:30px;"  name="l_name" Required value="<?php echo $ln; ?>" placeholder="Enter Last Name"/><br>
                    <input type="text" style="width:265px; height:30px;"  name="user_name" Required placeholder="Enter User Name"/><br>                
                    <input type="password" style="width:265px; height:30px;"  name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must have atleast one  number an upper and lowercase letter, and at least length of 8" Required placeholder="User Password"/><br>
                    <select style="width:265px; height:30px;"  name="role" Required placeholder="Choose Role">
                    <option value="admin">Admin</option>
                    <option value="staff">Staff</option>
                    </select><br>
                    <div>
                      <button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
                    </div>
                  </div>
                </div>
              </center>
            </div>
        </form>
    
    
        <p class="p">
            <?php                           
              
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

</body>
<?php include('footer.php');?>
</html>
<?php
	// clear error message
unset($_SESSION["USERNAME_EXIST"]);
?>