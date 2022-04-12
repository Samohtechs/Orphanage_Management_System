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
                    <i class="icon-table"></i> Add Child
                </div>
                <ul class="breadcrumb">
                    <!-- <li> <a href="index.php">Dashboard</a> </li>
                    <li class="active">Add Child</li> -->
                </ul>
                <div style="margin-top: -19px; margin-bottom: 21px;">
                    <a href="childrens.php">
                        <button class="btn btn-default btn-large" style="float: left;">
                            <i class="icon icon-circle-arrow-left icon-large"></i> Back
                        </button>
                    </a>

                    <form action="savechild.php" method="post" enctype="multipart/form-data">
                        <center>
                            <!-- <h4> 
                                <i class="icon-edit icon-large"> </i> Add New Child
                            </h4> -->
                        </center>
                            <hr>
                            <!-- <center> -->
                            <table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left; border=0;">    
                                <thead>
                                    <tr>
                                    
                                        <th width="15%"> Item</th>
                                        <th width="20%"> Description</th>
                                        
                                    </tr>
                                </thead> 
                                <tbody>
                                    <tr>
                                        <td> <span>Child ID </span> </td>
                                        <td> <!-- auto generated key -->
                                       <input type="text" style="width:265px; height:30px;" value="MS17-<?php 
                                        $prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,4));?>" name="child_id" readonly Required />
                                        <br></td>
                                    </tr> 
                                    <tr>
                                        <td><!-- Firat Name -->
                                        <span>First Name  </span</td>
                                        <td><input type="text" style="width:265px; height:30px;" name="first_name" id="first_name" Required />
                                        <br></td>
                                    </tr> 
                                    <!-- <tr>
                                        <td><-- middle Name -->
                                        <!-- <span>Middle Name  </span></td>
                                        <td><input type="text" style="width:265px; height:30px;" name="middle_name" Required />
                                        <br></td>
                                    </tr>  --> 
                                    <tr>
                                    <tr>
                                        <td><!-- Last Name -->
                                        <span>Last Name  </span></td>
                                        <td><input type="text" style="width:265px; height:30px;" name="last_name" Required />
                                        <br></td>
                                    </tr> 
                                    <tr>
                                        <td><!-- Gender -->
                                        <span>Gender </span></td>
                                        <td>
                                        <select name="gender" style="width:265px; height:30px; " >
                                            <option>Female</option>
                                            <option>Male</option>
                                        </select><br></td>
                                    </tr> 
                                    <tr>
                                        <td> <!-- Date of Birth -->
                                        <span>D.O.B </span></td>
                                        <td><input type	="date" style="width:265px; height:30px;" name="dob" required />
                                        <br></td>
                                    </tr> 
                                    <tr>
                                        <td> <!-- Address -->
                                        <span>Address  </span></td>
                                        <td><input type="text" style="width:265px; height:30px;" name="childAddress" Required />
                                        <br></td>
                                    </tr> 
                                    <tr>
                                        <td> <!-- Registration yeary -->
                                        <span> Registration Year </span></td>
                                        <td>
                                        <select name="dor" style="width:270px; height:35px; " >
                                            <?php
                                                $yr = 1998;
                                                for($yr; $yr <= date('Y'); $yr++) {
                                            ?>
                                                <option> <?php echo $yr; ?> </option>
                                                <?php
                                                }
                                            ?>
                                        </select></td>
                                    </tr> 
                                    <tr>
                                        <td><span>Guide/Relative Phone Number </span></td>
                                        <td><input type="number" style="width:265px; height:30px;" name="guide_phn" required placeholder="Please Provide a valid phone number" />
                                        <br></td>
                                    </tr> 
                                    <tr>
                                        <td><span>Report  </span></td>
                                        <td>
                                        <textarea style="width:265px; height:30px;" name="report" required placeholder="Provide short about child informations";></textarea>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td><span>School Name  </span></td>
                                        <td><input type="text" style="width:265px; height:30px;" name="school" required placeholder="Please Provide Child school name" />
                                       </td>
                                    </tr>
                                    <tr>
                                        <td><span>Class Level</span></td>
                                        <td><input type="text" style="width:265px; height:30px;" name="class" required placeholder="Please Provide Child's Present Class level" />
                                       </td>
                                    </tr>  
                                    <tr>
                                        <td><span>Passport </span></td>
                                        <td><input style="width:265px; height:30px;" type="file" name="file" id="file" required >
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td>
                                <center>
                                 <div>
                                    <button class="btn btn-success btn-block btn-large" style="width:264px;"><i class="icon icon-save icon-large"></i> Save</button>
                                 </div> 
                              </center></td>
                             </tr>    
                            </tbody> 
                            </table>
                            <br>      
                                <div style="align: center">
                                    <div id="ac">
                                        <input type="hidden" name="memi" value="<?php echo $id; ?>" />
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include('footer.php');?>
</html>