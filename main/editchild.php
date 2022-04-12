<?php include('header.php');?>
<body>
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
				<i class="icon-table"></i> Edit Child Information
				</div>
					<ul class="breadcrumb">
						<!-- <li><a href="index.php">Dashboard</a></li> /
						<li class="active">Edit Child Information</li> -->
					</ul>

				<div style="margin-top: -19px; margin-bottom: 21px;">
					<a  href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
					<center>
						<?php
							include('../connection.php');
							$id=$_GET['id'];
							$result = $conn->prepare("SELECT * FROM children WHERE id= :userid");
							$result->bindParam(':userid', $id);
							$result->execute();
							for($i=0; $row = $result->fetch(); $i++){
						?>
						<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
						<form action="save_edited_child.php" method="post" enctype="multipart/form-data">
							<center>
								<!-- <h4>
									<i class="icon-edit icon-large"></i> Edit Child
								</h4> -->
						   </center>
						   <input type="hidden" name="memi" value="<?php echo $id; ?>" />
						   <table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left; border=0;">    
                                <thead>
                                    <tr>
										
									<th width="15%"> Item</th>
                                    <th width="20%"> Description</th>
                                        
                                    </tr>
                                </thead>
								<tbody>
                                    <tr>
                                        <td>Reg No.</td>
										<td><input type="text" style="width:265px; height:30px;"  name="child_id" value="<?php echo $row['child_id']; ?>" readonly Required/>
								   </td>
							        </tr>
									<tr>
                                        <td>First Name :</td>
										<td><input type="text" style="width:265px; height:30px;"  name="first_name" value="<?php echo $row['first_name']; ?>" /><br>
								 </td>
							        </tr>		
									<tr>
                                        <td>Last Name : </td>
										<td><input type="text" style="width:265px; height:30px;"  name="last_name" value="<?php echo $row['last_name']; ?>" /><br> 
									</td>
							        </tr>
									<tr>
                                        <td> Gender:</td>
										<td> <select name="gender" style="width:265px; height:30px; margin-left:-5px;" >
											<option><?php echo $row['gender']; ?></option>
											<option>Male</option>
											<option>Female</option>
											</select> 
							           </td>
							        </tr>
									<tr>
                                        <td>D.O.B:  </td>
										<td> <input type	="date" style="width:265px; height:30px;" name="dob" value="<?php echo $row['dob']; ?>" />
								       </td>
							        </tr>
									<tr>
                                        <td>Address </td>
										<td>
								            <input type="text" style="width:265px; height:30px;" name="addr" value="<?php echo $row['address']; ?>" />
								       </td>
							        </tr>
									<tr>
                                        <td>Registered Year</td>
										<td> <select name="dor" style="width:265px; height:30px; margin-left:-5px;" >
										<option><?php echo $row['dor']; ?></option>
										<?php
											$yr = 1990;
											for($yr; $yr <= 2100; $yr++) {
											?>
												<option> <?php echo $yr; ?> </option>
											<?php
											}
										   ?>
									      </select> 
								       </td>
							        </tr>
									<tr>
                                        <td>Parent Phone : </span></td>
										<td><input type	="text" style="width:265px; height:30px;" value="<?php echo $row['guide']; ?>" name="guide_phn" required />
								         </td>
							        </tr>

									<tr>
                                        <td><span>School Name  </span></td>
                                        <td><input type="text" style="width:265px; height:30px;" name="school" required value="<?php echo $row['school_name']; ?>" placeholder="Please Provide Child school name" />
                                       </td>
                                    </tr>
                                    <tr>
                                        <td><span>Class Level</span></td>
                                        <td><input type="text" style="width:265px; height:30px;" name="class" required value="<?php echo $row['class_level']; ?>" placeholder=" Provide Child's class level" />
                                       </td>
                                    </tr>

									<tr>
                                        <td>Report :</td>
										<td> <textarea style="width:265px; height:50px;" name="report" ><?php echo $row['report']; ?> </textarea>
								       </td>
							        </tr>
									</table>
                                   <br>
								
								<div>
									<button class="btn btn-success btn-block btn-large btnSave" style="width:267px;">
										<i class="icon icon-save icon-large"></i> Save Changes
									</button>
								</div>
							</div>
						</form>
						<?php
						}
						?>
					</center>
				</div>
			</div>
		</div>
	</div>
</body>
<?php include('footer.php');?>
</html>