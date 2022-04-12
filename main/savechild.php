<?php
  session_start();
  include('../connection.php');
  $a = $_POST['first_name'];
  // $m = $_POST['middle_name'];
  $k = $_POST['last_name'];
  $b = $_POST['report'];
  $s = $_POST['school'];
  $x = $_POST['class'];
  $c = $_POST['dor'];
  $d = $_POST['guide_phn'];
  $e = $_POST['dob'];
  $f = $_POST['child_id'];
  $g = $_POST['gender'];
  $addr = $_POST['childAddress'];
  // query

  $file_name  = strtolower($_FILES['file']['name']);
  $file_ext = substr($file_name, strrpos($file_name, '.'));
  $prefix = 'chakuwama_orphanage_care_center_'.md5(time()*rand(1, 9999));
  $file_name_new = $prefix.$file_ext;
  $path = '../uploads/'.$file_name_new;

  /* check if the file uploaded successfully */
  if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) 
  {
    //do your write to the database filename and other details   
    $sql = "INSERT INTO children (first_name,  last_name, report,school_name, class_level, dor, guide, dob, child_id, gender, file, address) VALUES (:a,:k,:b,:s,:x,:c,:d,:e,:f,:g,:h,:addr)";
    $q = $conn->prepare($sql);
    $q->execute(array(':a'=>$a,':k'=>$k,':b'=>$b,':s'=>$s,':x'=>$x,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$file_name_new, ':addr'=>$addr));
    header("location: childrens.php");
	}
?>