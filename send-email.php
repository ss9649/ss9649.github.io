<?php



if(isset($_POST['submit']))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $mailTo = "ss9649@rit.edu";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);

    header("Location: index.html?mailsend");
}


// web server serves web pages, SMTP server serves emails