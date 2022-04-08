


<?php

//process_data.php

if(isset($_POST["UserName"]))
{
 $UserName = '';
 $password = '';

 $UserName_error = '';
 $password_error = '';
 $captcha_error = '';

 if(empty($_POST["UserName"]))
 {
  $UserName_error = 'UserName is required';
 }
 else
 {
  $UserName = $_POST["UserName"];
 }

 

 if(empty($_POST["password"]))
 {
  $password_error = 'Password is required';
 }
 else
 {
  $password = $_POST["password"];
 }

 if(empty($_POST['g-recaptcha-response']))
 {
  $captcha_error = 'Captcha is required';
 }
 else
 {
  $secret_key = '6Lcyk-MaAAAAAG1GR1Ve9QA2WY45Q_TnH8K1h6Vi';

  $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);

  $response_data = json_decode($response);

  if(!$response_data->success)
  {
   $captcha_error = 'Captcha verification failed';
  }
 }

 if($UserName_error == '' && $password_error == '' && $captcha_error == '')
 {
  $data = array(
   'success'  => true
  );
 }
 else
 {
  $data = array(
   'UserName_error' => $first_name_error,
   'password_error' => $password_error,
   'captcha_error'  => $captcha_error
  );
 }

 echo json_encode($data);
}

?>


