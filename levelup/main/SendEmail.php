<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['fname'])  && isset($_POST['email'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phn = $_POST['phn'];
    $sub = $_POST['sub'];
    $msg = $_POST['msg'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "gusainnisha20@gmail.com";
    $mail->Password = 'Muffin@98765';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $fname);
    $mail->addAddress("gusainnisha20@gmail.com");
    $mail->Subject = ("$email ($sub)");
    $mail->Body = $msg;

    if($mail->send()){
        $status = "success";
        $response = "Email is sent!";
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}

?>