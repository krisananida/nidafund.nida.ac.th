<?php
/*    if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']))
    {
*/        // include Database connection file
    include("dbcon.php");
    include("uplaodfile.php");

    $data = "NOT PASS";
    // get values
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $idcard = trim($_POST['idcard']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $district = trim($_POST['district']);
    $provinceid = trim($_POST['province']);
    $postalcode = trim($_POST['postalcode']);
    $amount = trim($_POST['amount']);

    $query = "INSERT INTO dn1_tbillrequest(fname, lname, idcard, email, phone, address, district, provinceid, postalcode, amount)";
    $query .= "VALUES('$fname', '$lname', '$idcard', '$email', '$phone', '$address', '$district', '$provinceid', '$postalcode', '$amount' )";

    mysqli_begin_transaction($con, MYSQLI_TRANS_START_READ_WRITE);


    if (!$result = mysqli_query($con, $query)) {
        mysqli_rollback($con);
        mysqli_close($con);
        exit(mysqli_error($con));
    }

    /*
    else{
      $last_id = mysqli_insert_id($con);
      if(uploadfile($last_id)){
        mysqli_commit($con);
        mysqli_close($con);
        $data = "PASS";
      }
      else{
        mysqli_rollback($con);
        mysqli_close($con);
      }
    }
    */

    $last_id = mysqli_insert_id($con);
    $idstr = (string)sprintf("%'.06d", $last_id);
    $datestr = date("ymd");
    $target_dir = "../uploadfile/";
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

    $query = "UPDATE dn1_tbillrequest SET uploadfilename = '$uploadfilename' WHERE id = '$last_id'";
    if (!$result = mysqli_query($con, $query)) {
        mysqli_rollback($con);
        mysqli_close($con);
        exit(mysqli_error($con));
    }

/*
    }
*/
    $query = "SELECT * FROM dn1_tbillrequest WHERE id='$last_id'";
    if (!$result = mysqli_query($con, $query)) {
        mysqli_rollback($con);
        mysqli_close($con);
        exit(mysqli_error($con));
    }
    $row = mysqli_fetch_assoc($result);
    $file_dir = "http://demo01.donate.nida.ac.th/donate05/uploadfile/";
    $cid = $row['id'];
    $cfname = $row['fname'];
    $clname = $row['lname'];
    $cfilename = $file_dir.$row['uploadfilename'];
    $cdatetimereq = $row['datetimereq'];
    //$datatxt = "'$cid','$cfname','$clname','$cfilename','$cdatetimereq'\n";
    $datatxt = $cid . "," . $cfname . "," . $clname . "," . $cfilename . "," . $cdatetimereq ."\n";
    $datafile = fopen("../data/donatereqdata.csv", "a") or die("Unable to open file!");
    fwrite($datafile, $datatxt);
    fclose($datafile);

    mysqli_close($con);
    //mail
    ######################
    //$host = 'smtp.office365.com';
    $host = '202.44.72.16';
    //$port = '587';
    $port = '25';
    $username = 'icada2018@nida365.onmicrosoft.com';
    #$username = 'icada@nida365.onmicrosoft.com';
    $password = 'Rata4119';
    ##########################
    // subject
    $subject = "NIDA Donation TEST";


    $message = "
    This is an automatic acknowledgement of your online pre-registration.<br>
    For more information, visit our web site: www.ICADA2018.nida.ac.th <br>
    or contact: nida_gcss@hotmail.com,icada4papers@gmail.com \n\n";
    $message .= " <br>Join As: $joinas <br>  TITLE:$title  $other<br>  LASTNAME:$lastname<br> FIRSTNAME:$firstname<br> MIDDLENAME:$middlename<br> NATIONALITY:$nationality<br> Affiliation:$affiliation<br> MAILING ADDRESS:$address <br>PHONE:$phone<br>CELL:$cell<br>FAX:$fax<br>EMAIL:$email<br>EXCURSION:$excursion<br>";
    $message = "This is test informaton <br>";
    $message .= "First name : " . $fname . "<br>";
    $message .= "First name : " . $lname . "<br>";
    $message .= "First name : " . $email . "<br>";
    $message .= "fileupload : " . $cfilename . "<br>";

    // Mail it
    //$from = "ICADA2018 NIDA <icada2018@nida365.onmicrosoft.com>";
    //$to = $email;
    //$bcc = 'nida_gcss@hotmail.com,icada4papers@gmail.com,chin_mae_jo_dai@hotmail.com';
    $form = "NIDA <itc@nida.ac.th>";
    $to = $email;
    $bcc = "krisana@nida.ac.th";
    $body = $message;

    $headers = array(
     'Port'          => $port,
     'From'          => $from,
     'To'            => $to,
     'Subject'       => $subject,
    'Content-Type'  => 'text/html; charset=UTF-8'
    );

    $recipients = $to.", ".$bcc;
    $emailinfo = $to . " " . $body . " " . $subject;
    /*
    $smtp = Mail::factory('smtp',
     array ('host' => $host,
     'auth' => true,
     'username' => $username,
     'password' => $password));

    $mail = $smtp->send($recipients, $headers, $body);
    */


    if(mail($to, $subject, $body)){
      echo $emailinfo . " : email successfully";
    }
    else{
      echo $emailinfo . " : email failed";
    }

    /*
    if (PEAR::isError($mail)) {
       echo("<p>" . $mail->getMessage() . "</p>");
    } else {
       echo("<p>Message successfully sent!</p>");
    }
    */

    //echo $datatxt;
?>
