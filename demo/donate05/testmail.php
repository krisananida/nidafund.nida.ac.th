<?php
$to = "krisana@nida.ac.th";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: nidafund@nida.ac.th" . "\r\n" .
"CC: krisana.lor@stu.nida.ac.th";

if(mail($to,$subject,$txt,$headers)){
  alert "success";
}
else{
  alert "error";
}
?>
