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
                    <i class="icon-table"></i> Guidance / Someone Information
                </div>
                <ul class="breadcrumb">
                    <li> <a href="index.php">Dashboard</a> </li>
                    <li class="active">Guidance / Someone Information</li>
                </ul>
                <div style="margin-top: -19px; margin-bottom: 21px;">
                    <a href="index.php">
                        <button class="btn btn-default btn-large" style="float: left;">
                            <i class="icon icon-circle-arrow-left icon-large"></i> Back
                        </button>
                    </a>
                    <form action="#" method="post" id="gorm" enctype="multipart/form-data" style="float: right;">
                        <center>
                            <h4> 
                                <i class="icon-edit icon-large"> </i> Add Guidance / Someone Information
                            </h4>
                        </center>
                            <hr>
                            <center>
                                <div style="align: center">
                                    <div id="ac">
                                        <input type="hidden" name="memi" value="<?php echo $id; ?>" />

                                        <!-- auto generated key -->
                                        <span>Guide ID: </span><input type="text" style="width:265px; height:30px;" value="MS17-<?php 
                                        $prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,4));?>" name="guide_id" readonly Required />
                                        <br>
                                        <!-- Firat Name -->
                                        <span>First Name : </span><input type="text" style="width:265px; height:30px;" name="first_name" id-"first_name" Required />
                                        <br>
                                        <!-- Last Name -->
                                        <span>Last Name : </span><input type="text" style="width:265px; height:30px;" name="last_name" Required />
                                        <br>
                                        <!-- Gender -->
                                        <span>Gender: </span>
                                        <select name="gender" style="width:265px; height:30px; margin-left:-5px;" >
                                            <option>Female</option>
                                            <option>Male</option>
                                        </select><br>
                                        <!-- Date of Birth -->
                                        <span>D.O.B: </span><input type	="date" style="width:265px; height:30px;" name="dob" required />
                                        <br>
                                        <!-- Address -->
                                        <span>Address : </span><input type="text" style="width:265px; height:30px;" name="childAddress" Required />
                                        <br>
                                        <!-- Registration yeary -->
                                        <span> Registration Year </span>
                                        <select name="dor" style="width:265px; height:30px; margin-left:-5px;" >
                                            <?php
                                                $yr = 1990;
                                                for($yr; $yr <= 2100; $yr++) {
                                                ?>
                                                    <option> <?php echo $yr; ?> </option>
                                                <?php
                                                    if($yr == date('Y')) {
                                                    ?>
                                                    <option selected> <?php echo $yr; ?> </option>
                                                    <?php
                                                    continue;
                                                    }
                                                }
                                            ?>
                                        </select>

                                        <br>
                                        <span>Phone #: </span><input type="number" style="width:265px; height:30px;" name="guide_phn" required title="Please Provide a valid phone number" />
                                        <br>

                                        <span>Short Notes : </span>
                                        <textarea style="width:265px; height:50px;" name="report" required ></textarea>
                                        <br>

                                        <span>Passport:</span><input style="width:265px; height:50px;" type="file" name="file" id="file" required >
                                        <br><br>

                                        <div>
                                            <button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include('footer.php');?>
</html>
</html>