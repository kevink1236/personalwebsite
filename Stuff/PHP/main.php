<?php

if(isset($_POST['button'])) {
     $name = $_POST['name'];
     $subject = $_POST['subject'];
     $mailFrom = $_POST['mail'];
     $message = $_POST['message'];

     $mailTo = "rlaehgus245245@gmail.com";
     $header = "From: ".$mailFrom;
     $txt = "You have received an e-mail from ".$name.".\n\n".$message;

     mail($mailTo, $subject, $txt, $headers);

     header("Location: index.php?mailsend");
}

?>
