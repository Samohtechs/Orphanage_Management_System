<?php include ('header.php');?>

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
                    <a href="childrens.php">
                        <button class="btn btn-default btn-large" style="float: left;">
                            <i class="icon icon-circle-arrow-left icon-large"></i> Back
                        </button>
                    </a>
                    <a href="adduser.php">
                        <button class="btn btn-default btn-large" style="float: left;">
                            <i class="icon icon-circle- icon-large"></i> ADD USER
                        </button>
                    </a>
                    
                    <!-- Function to count and show toatl number of users -->
                    <!-- </?php 
						$result = $conn->prepare("SELECT * FROM users ORDER BY id DESC");
						$result->execute();
						$rowcount = $result->rowcount();
					?>

                    <div style="text-align:center;">
                        Available users: <font color="green" style="font:bold 22px 'Aleo';">
                            [</?php echo $rowcount;?>]</font>
                    </div> -->

                    <form action=" " method="post" enctype="multipart/form-data">
                        <center>
                            <h4> 
                                <i class="icon-edit icon-large"> </i> All Users
                            </h4>
                        </center>
                            <!-- Table to show all users -->
                            <table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left; border=0;">    
                                <thead>
                                    <tr>
                                    
                                        <th width="50%"> User Name</th>
                                        <th width="30%"> Role</th>
                                        <th width="20%"> Action</th>

                                    </tr>
                                </thead> 
                                <tbody>
                                <?php
							$result = $conn->prepare("SELECT * FROM user ORDER BY role");
							$result->execute();
							for($i=0; $row = $result->fetch(); $i++){
						       ?>
                       
                                    <tr>
                                        <td><?php echo $row['user_name']; ?></td>
                                        <td><?php echo $row['role']; ?></td>
                                        <td>
                                        <a> <button><a href="edituser.php"> Edit</a></button>
                                            </a>
                                           <a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete">
                                                <button class="btn btn-danger btn-mini"><i class="icon-trash"></i> Delete</button>
                                            </a>
                                        </td>
                                    </tr> 
                                    <?php } ?>
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
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
    $(function() {
        $(".delbutton").click(function() {
            //Save the link in a variable called element
            var element = $(this);

            //Find the id of the link that was clicked
            var del_id = element.attr("id");

            //Built a url to send
            var info = 'id=' + del_id;
            if (confirm("Sure you want to delete this User? There is NO undo!")) {
                $.ajax({
                    type: "GET",
                    url: "deleteuser.php",
                    data: info,
                    success: function() {
                        // Refresh page to remove deleted data
                        location.reload();
                        return false;
                    }
                });
                $(this).parents(".record").animate({
                        backgroundColor: "#fbc7c7"
                    }, "fast")
                    .animate({
                        opacity: "hide"
                    }, "slow");
            }
            return false;
        });
    });
    </script>
</body>
<?php include('footer.php');?>

</html>
   
