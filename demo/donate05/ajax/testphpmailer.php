<?php

require 'PHPMailer.php';

echo "php test send mail";

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = '202.44.72.16';     // Specify main and backup SMTP servers
    $mail->Port = 25;

    //Recipients
    $mail->setFrom('nidafund@nida.ac.th', 'NIDA FUND');
    $mail->addAddress('krisana@nida.ac.th', 'KRISANA');     // Add a recipient
    $mail->addReplyTo('nidafund@nida.ac.th', 'NIDA FUND');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
        echo 'Message has been sent';

  } catch (Exception $e) {
      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }





?>
