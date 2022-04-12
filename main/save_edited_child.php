<?php
    // configuration
    include('../connection.php');

    // new data
    $id = $_POST['memi'];
    $a = $_POST['first_name'];
    $h = $_POST['last_name'];
    $b = $_POST['report'];
    $s = $_POST['school'];
    $x = $_POST['class'];
    $c = $_POST['dor'];
    $d = $_POST['guide_phn'];
    $e = $_POST['dob'];
    $f = $_POST['child_id'];
    $g = $_POST['gender'];
    $addr = $_POST['addr'];
    // query

    $sql = "UPDATE children 
        SET first_name=?, last_name=?, report=?, school_name=?, class_level=?, dor=?, guide=?, dob=?, child_id=?, gender=?, address=?
        WHERE id=?";
    $q = $conn->prepare($sql);
    $q->execute(array($a,$h,$b,$s,$x,$c,$d,$e,$f,$g,$addr,$id));
    header("Location: childrens.php");

?>