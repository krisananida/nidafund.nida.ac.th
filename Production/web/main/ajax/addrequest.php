<?php

session_start();

if( isset($_SESSION['receiptrequest'])){

    // include Database connection file
    $confile = $_SERVER["DOCUMENT_ROOT"]. "/appconf/dbcon.php";
    include($confile);
    //include("uplaodfile.php");

    //$data = "NOT PASS";
    // get values
    $prefixid = trim($_POST['prefixid']);
    $prefixname = trim($_POST['prefixname']);
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $idcard = trim($_POST['idcard']);
    $email = trim($_POST['email']);
    $phonehome = trim($_POST['phone']);
    $phonemobile = trim($_POST['mobile']);
    $address = trim($_POST['address']);
    $subdistrict = trim($_POST['subdistrict']);
    $district = trim($_POST['district']);
    $provinceid = trim($_POST['province']);
    $postalcode = trim($_POST['postalcode']);
    $amount = trim($_POST['amount']);

    $receiptaddresstype = trim($_POST['receiptaddresstype']);
    $receiptnametype = trim($_POST['receiptnametype']);
    $receiptprefixid = trim($_POST['receiptprefixid']);
    $receiptprefixname = trim($_POST['receiptprefixname']);
    $receiptfname = trim($_POST['receiptfname']);
    $receiptlname = trim($_POST['receiptlname']);
    $receiptorgname = trim($_POST['receiptorgname']);
    $receiptemail = trim($_POST['receiptemail']);
    $receiptphonehome = trim($_POST['receiptphone']);
    $receiptphonemobile = trim($_POST['receiptmobile']);
    $receiptaddress = trim($_POST['receiptaddress']);
    $receiptsubdistrict = trim($_POST['receiptsubdistrict']);
    $receiptdistrict = trim($_POST['receiptdistrict']);
    $receiptprovinceid = trim($_POST['receiptprovince']);
    $receiptpostalcode = trim($_POST['receiptpostalcode']);


    $query = "INSERT INTO nf2018_treceiptrequest(prefixid, prefixname, fname, lname, idcard, email, phonehome, phonemobile";
    $query .= ", address, subdistrict, district, provinceid, postalcode, amount";
    $query .= ", receiptaddresstype";
    if($receiptaddresstype == "02"){
      $query .= ", receiptnametype";
      if($receiptnametype == "01"){
        $query .= ", receiptprefixid, receiptprefixname, receiptfname, receiptlname";
      }
      elseif ($receiptnametype == "02") {
        $query .= ", receiptorgname";
      }
      $query .= ", receiptemail, receiptphonehome, receiptphonemobile";
      $query .= ", receiptaddress, receiptsubdistrict, receiptdistrict, receiptprovinceid, receiptpostalcode";
    }
    $query .= ")";
    $query .= " VALUES('$prefixid', '$prefixname', '$fname', '$lname', '$idcard', '$email', '$phonehome', '$phonemobile'";
    $query .= ", '$address', '$subdistrict', '$district', '$provinceid', '$postalcode', '$amount'";
    $query .= ", '$receiptaddresstype'";
    if($receiptaddresstype == "02"){
      $query .= ", '$receiptnametype'";
      if($receiptnametype == "01"){
        $query .= ",'$receiptprefixid', '$receiptprefixname', '$receiptfname', '$receiptlname'";
      }
      elseif ($receiptnametype == "02") {
        $query .= ", '$receiptorgname'";
      }
      $query .= ", '$receiptemail', '$receiptphonehome', '$receiptphonemobile'";
      $query .= ", '$receiptaddress', '$receiptsubdistrict', '$receiptdistrict', '$receiptprovinceid', '$receiptpostalcode'";
    }
    $query .= ")";

    //echo $query;

    if (!$result = mysqli_query($con, $query)) {
        echo "mssql error";
        exit(mysqli_error($con));
    }

    $last_id = mysqli_insert_id($con);
    $idstr = (string)sprintf("%'.06d", $last_id);
    $datestr = date("ymd");
    $target_dir = "../evidence/";
    $uploadfilename = $datestr  . "" . $idstr . "." . basename($_FILES["evidence"]["type"]);
    $target_file = $target_dir . $uploadfilename;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["evidence"]["tmp_name"], $target_file)) {
        //echo $last_id . " " . $target_file . " The file ". basename( $_FILES["evidence"]["name"]). " has been uploaded.";
        $data = "PASS";
    } else {
        echo $target_file . "Sorry, there was an error uploading your file.";
    }

    $query = "UPDATE nf2018_treceiptrequest SET uploadfilename = '$uploadfilename' WHERE id = '$last_id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

}
?>
