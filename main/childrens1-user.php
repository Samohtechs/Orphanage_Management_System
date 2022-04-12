<?php include('header1.php');?>

</script>

<body>
    <?php include('navfixed.php');?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2">
                <div class="well sidebar-nav">
                    <?php require_once('navigation/user-nav.html'); ?>
                </div>
                <!--/.well -->
            </div>
            <!--/span-->
            <div class="span10">
                <div class="contentheader">
                    <i class="icon-table"></i>All Children 
                </div>
                <ul class="breadcrumb">
                    <li class="active"> <?php 
						$result = $conn->prepare("SELECT * FROM children ORDER BY id DESC");
						$result->execute();
						$rowcount = $result->rowcount();
					?>

                    <div style="text-align:center;">
                        Total Number of Childrens: <font color="green" style="font:bold 22px 'Aleo';">
                            [<?php echo $rowcount;?>]</font>
                    </div></li>
                </ul>


                <div style="margin-top: -19px; margin-bottom: 21px;">
                 
                </div>

                <input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter"
                    placeholder="Search Childrens..." autocomplete="off" />
					<h4>
                        <button style="float: right;" class="btn btn-default btn-large" id="printData">
					     <i class="icon icon-print icon-large"></i> Print
					     </button>
					</h4>
						<script>
								$('#printData').click(function () {
    								domtoimage.toPng(document.getElementById('content2'))
        								.then(function (blob) {
            						var pdf = new jsPDF('l', 'pt', [$('#content2').width(), $('#content2').height()]);

            							pdf.addImage(blob, 'PNG', 0, 0, $('#content2').width(), $('#content2').height());
            							pdf.save("All Children.pdf");

            							that.options.api.optionsChanged();
        							});
                                });
                        </script>
				 <br>
                 <div id="content2">
                <table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
                    <thead>
                        <tr>
                            <th width="15%"> Child ID</th>
                            <th width="20%"> Full Name </th>
                            <th width="10%"> Gender </th>
                            <th width="10%"> Registration Year </th>
                            <th width="10%"> Guide Contact </th>
                            <th width="10%"> Address </th>
                            <th width="10%"> Class </th>
                            <!-- <th width="15%"> Action </th> -->
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
                            <td><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['dor']; ?></td>
                            <td><?php echo $row['guide']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['class_level']; ?></td>
                            <!-- <td>
                                <a title="Click to view the Student" href="viewchild.php?id=</?php echo $row['id']; ?>">
                                    <button class="btn btn-success btn-mini"><i class="icon-search"></i> View</button>
                                </a>
                                <a title="Click to edit the Student" href="editchild.php?id=</?php echo $row['id']; ?>">
                                    <button class="btn btn-warning btn-mini"><i class="icon-edit"></i> Edit</button>
                                </a>
                                <a href="#" id="</?php echo $row['id']; ?>" class="delbutton" title="Click To Delete">
                                    <button class="btn btn-danger btn-mini"><i class="icon-trash"></i> Delete</button>
                                </a>
                            </td> -->
                        </tr>
                        <?php
						}
					?>
                    </tbody>
                </table>
                </div>
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