<?php include('header.php');?>

<body>
    <?php include('navfixed.php');?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2">
                <div class="well sidebar-nav">
                    <?php require_once('navigation/nav.html'); ?>
                </div>
                <!--/.well -->
            </div>
            <!--/span-->
            <div class="span10">
                <div class="contentheader">
                    <i class="icon-table"></i> Children
                </div>
                <ul class="breadcrumb">
                    <!-- <li><a href="index.php">Dashboard</a></li> /
                    <li class="active">Childrens</li> -->
                </ul>


                <div style="margin-top: -19px; margin-bottom: 21px;">
                    <a href="index.php"><button class="btn btn-default btn-large" style="float: left;">
                            <i class="icon icon-circle-arrow-left icon-large"></i> Back</button>
                    </a>

                    <?php 
						$result = $conn->prepare("SELECT * FROM children ORDER BY id DESC");
						$result->execute();
						$rowcount = $result->rowcount();
					?>

                    <div style="text-align:center;">
                        Total Number of Childrens: <font color="green" style="font:bold 22px 'Aleo';">
                            [<?php echo $rowcount;?>]</font>
                    </div>

                </div>

                <input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter"
                    placeholder="Search Childrens..." autocomplete="off" />
					
                <a href="childrens1.php">
					<Button type="submit" class="btn btn-info"
                        style="float:right; width:230px; height:35px;" /><i class="icon- icon-large"></i>Remove Action
					</button>
				</a>
				<br><br>

                
                
                <table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;" id="content2">
                    <thead>
                        <tr>
                            <th width="10%"> Child ID</th>
                            <th width="20%"> Full Name </th>
                            <th width="10%"> Gender </th>
                            <th width="5%"> Registration Year </th>
                            <th width="10%"> Guide Contact </th>
                            <th width="10%"> Address </th>
                            <th width="10%"> Class </th>
                            <th width="20%"> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
							$result = $conn->prepare("SELECT * FROM children ORDER BY dor DESC");
							$result->execute();
							for($i=0; $row = $result->fetch(); $i++){
						?>
                        <tr>
                            <td><?php echo $row['child_id']; ?></td>
                            <td><?php echo $row['first_name'] . ' ' . $row['middle_name']. ' ' . $row['last_name']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['dor']; ?></td>
                            <td><?php echo $row['guide']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['class_level']; ?></td>
                            <td>
                                <a title="Click to view the Student" href="viewchild.php?id=<?php echo $row['id']; ?>">
                                    <button class="btn btn-success btn-mini"><i class="icon-search"></i> View</button>
                                </a>
                                <a title="Click to edit the Student" href="editchild.php?id=<?php echo $row['id']; ?>">
                                    <button class="btn btn-warning btn-mini"><i class="icon-edit"></i> Edit</button>
                                </a>
                                <a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete">
                                    <button class="btn btn-danger btn-mini"><i class="icon-trash"></i> Delete</button>
                                </a>
                            </td>
                        </tr>
                        <?php
						}
					?>
                    </tbody>
                </table>
                <div class="clearfix"></div>
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
            if (confirm("Sure you want to delete this Child? There is NO undo!")) {
                $.ajax({
                    type: "GET",
                    url: "deletechild.php",
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