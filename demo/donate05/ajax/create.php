<?php
  require("lib.php");
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $idcard = $_POST['idcard'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $object = new CRUD();

  $object->Create($fname, $lname, $idcard, $email, $phone);

?>
