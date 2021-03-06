<?php

  session_start();

  if (isset($_POST['submit'])){
    //store form data in variables
    $name = htmlspecialchars($_POST['name']);
    $mailFrom = htmlspecialchars($_POST['email']);
    $about = htmlspecialchars($_POST['topic']);
    $message = htmlspecialchars($_POST['message']);

    //email details
    $mailTo = "hello@snowiewongdev.com";
    $subject = "New Contact Form Entry at Portfolio Website From: ".$mailFrom;
    $body = "<p> You have recieved a new contact form entry at your portfolio website:</p>
    <p> Sender: ".$name."</p>
    <p> Email: ".$mailFrom."</p>
    <p> About: ".$about."</p>
    <p> Message: ".$message."</p>";

    //Email setting using headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: SWdevelopment <noreply@snowiewongdev.com>" . "\r\n" ;

    //recaptcha setting
    $secretKey 	= 'aSecretKey';
  	$token 		= $_POST["g-token"];
    $ip			= $_SERVER['REMOTE_ADDR'];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$token."&remoteip=".$ip;

    $request = file_get_contents($url);
    $response = json_decode($request);

    if ($response->success) {

      if (mail($mailTo, $subject, $body, $headers)){
        $msg = "Your message has been sent successfully.";

      } else {
        $msg = "Sorry, your message is not sent. Please email me directly.";
        echo "phpmailer fail";
      }

    } else {

      $msg = "Sorry, your message is not sent. Please try again.";

    }

    $_SESSION['msg'] = $msg;
    header('Location: index.php#contact');
  }
