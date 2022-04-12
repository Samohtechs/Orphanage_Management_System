<?php include('header1.php');?>
<body>
    <?php include('navfixed.php');?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2">
                <div class="well sidebar-nav">
                    <!-- The side sidebar -->
                    <?php require_once('navigation/user-nav.html'); ?>
                </div>
                <!--/.well -->
            </div>
            <!--/span-->
            <div class="span10">
                <div class="contentheader">
                    <i class="icon-table"></i> Child Information
                </div>
                <ul class="breadcrumb">
                    <!-- <li><a href="index.php">Dashboard</a></li> /
                    <li class="active">Child Information</li> -->
                </ul>


                <div style="margin-top: -19px; margin-bottom: 21px;">
                    <a href="childrens-user.php">
						<button class="btn btn-default btn-large" style="float: left;">
							<i class="icon icon-circle-arrow-left icon-large"></i> Back
						</button>
					</a>
                    <?php
						include('../connection.php');
						$id=$_GET['id'];
						$result = $conn->prepare("SELECT * FROM children WHERE id= :userid");
						$result->bindParam(':userid', $id);
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++){
					?>

						<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
						<center>
							<h4>
								
								<button style="float: right;" class="btn btn-default btn-large" id="printData">
									<i class="icon icon-print icon-large"></i> 
									Print
								</button>
							</h4>
							<script>
								$('#printData').click(function () {
    								domtoimage.toPng(document.getElementById('content2'))
        								.then(function (blob) {
            						var pdf = new jsPDF('l', 'pt', [$('#content2').width(), $('#content2').height()]);

            							pdf.addImage(blob, 'PNG', 0, 0, $('#content2').width(), $('#content2').height());
            							pdf.save("Child report.pdf");

            							that.options.api.optionsChanged();
        							});
                				});
								// function printData() {
								// 	window.location = 'http://localhost/OphanageCareSystem/studntreport/main/plugin/toPDF.php';
								// }
							</script>
						</center>
						<hr>

						<center id="content2">
							<div class="container-fluid">
								<div class="p-4">
						<i class="icon-edit icon-large"></i> 
								Child Information
							<br><b><hr>	
							<img src="../uploads/<?php echo $row['file'];?>" class="roundimage2" alt="" />
							<br><br>
                            <div class="container-fluid"> 
                             <div class="container-fluid">
                             <div class="container-fluid">

							<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;" >
								<tr>
									<td width="20%"> Child ID. : </td>
									<td width="50%" style="padding: 10px;
									border-top: 1px solid #fafafa;
									background-color: #f4f4f4;
									text-align: left;
									color: #7d7d7d;"> <?php echo $row['child_id']; ?>
									</td>
								</tr>

								<tr>
									<td> Full Name : </td>
									<td style="padding: 10px;
								border-top: 1px solid #fafafa;
								background-color: #f4f4f4;
								text-align: left;
								color: #7d7d7d;"> <?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?>
									</td>
								</tr>

								<tr>
									<td> Gender: </td>
									<td style="padding: 10px;
									border-top: 1px solid #fafafa;
									background-color: #f4f4f4;
									text-align: left;
									color: #7d7d7d;"> <?php echo $row['gender']; ?>
									</td>
								</tr>

								<tr>
									<td> D.O.B: </td>
									<td style="padding: 10px;
									border-top: 1px solid #fafafa;
									background-color: #f4f4f4;
									text-align: left;
									color: #7d7d7d;"> <?php echo $row['dob']; ?>
									</td>
								</tr>

								<tr>
									<td> Address: </td>
									<td style="padding: 10px;
									border-top: 1px solid #fafafa;
									background-color: #f4f4f4;
									text-align: left;
									color: #7d7d7d;"> <?php echo $row['address']; ?>
									</td>
								</tr>

								<tr>
									<td> Admission Year : </td>
									<td style="padding: 10px;
									border-top: 1px solid #fafafa;
									background-color: #f4f4f4;
									text-align: left;
									color: #7d7d7d;"> <?php echo $row['dor']; ?>
									</td>
								</tr>
								<tr>
									<td> School : </td>
									<td style="padding: 10px;
									border-top: 1px solid #fafafa;
									background-color: #f4f4f4;
									text-align: left;
									color: #7d7d7d;"> <?php echo $row['school_name']; ?>
									</td>
								</tr>
								<tr>
									<td> Class : </td>
									<td style="padding: 10px;
									border-top: 1px solid #fafafa;
									background-color: #f4f4f4;
									text-align: left;
									color: #7d7d7d;"> <?php echo $row['class_level']; ?>
									</td>
								</tr>

								<tr>
									<td> Parent Phone: </td>
									<td style="padding: 10px;
									border-top: 1px solid #fafafa;
									background-color: #f4f4f4;
									text-align: left;
									color: #7d7d7d;"> <?php echo $row['guide']; ?>
									</td>
								</tr>

								<tr>
									<td> Report : </td>
									<td style="padding: 10px;
									border-top: 1px solid #fafafa;
									background-color: #f4f4f4;
									text-align: left;
									color: #7d7d7d;"> <?php echo $row['report']; ?>
									</td>
								</tr>
							</table>
                            </div></div></div>
							<br>
							</div>
							</div></center>
					</div>
					<?php
					}
				?>
</body>
<?php include('footer.php');?>
</html>