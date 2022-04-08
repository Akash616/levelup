
<?php include 'Header.php';?>




 <div class="container">
     <div class="row">
         <div class="col-lg-6 m-auto">
             <div class="card bg-light mt-5">
                 <div class="card-title bg-primary text-white mt-5">
                     <h3 class="text-center py-2">Login Form</h3>
                    
                 </div>

                 <?php
                    
                        if(isset($_GET['empty']))
                        {
                            $Message=$_GET['empty'];
                            $Message= " Please Fill All Details";
                    ?>
                 <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                 <?php                            
                        }
                    
                    ?>


                 <?php
                    
                        if(isset($_GET['U_Invalid']))
                        {
                            $Message=$_GET['U_Invalid'];
                            $Message= " Invalid User";
                    ?>
                 <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                 <?php                            
                        }
                    
                    ?>


                 <?php
                    
                        if(isset($_GET['P_Invalid']))
                        {
                            $Message=$_GET['P_Invalid'];
                            $Message= " Invalid Password";
                    ?>
                 <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                 <?php                            
                        }
                    
                    ?>
                  <?php
                    
                        if(isset($_GET[' g-recaptcha-response_Invalid']))
                        {
                            $Message=$_GET[' g-recaptcha-response_Invalid'];
                            $Message= " enter the captcha";
                    ?>
                 <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                 <?php                            
                        }
                    
                    ?>

                 
                 

                 <div class="card-body"> 
                     <form action="includes/login.php" method="POST" id="captcha_form">
                          <h6 class="text-center py-2">Already a member</h6>
                         <label>UserName <span class="text-danger">*</span></label>
                         <input type="text" name="UserName" placeholder="Enter User Name or Email" class="form-control my-2">
                          <span id="UserName_error" class="text-danger"></span>
                         <label>Password <span class="text-danger">*</span></label>
                         <input type="password" name="password" placeholder=" Enter Your Password" class="form-control mb-3" >
                         <span id="password_error" class="text-danger"></span>
                          <label>captcha required <span class="text-danger">*</span></label>
       <div class="g-recaptcha" data-sitekey="6Lcyk-MaAAAAAAtb8uc9T7s3uI1TCI4DOdn0w-lK"></div>
       <span id="captcha_error" class="text-danger"></span>
    
                         
                        <button class="btn btn-success" name="login" class="pt-3">Login</button>
                           <h6  style="text-align:right">Not yet a member?</h6>
                         <a href="signupdesign.php"><p style="text-align:right"p>signup now!</a>
                         
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
<script>
$(document).ready(function(){

 $('#captcha_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"process_data.php",
   method:"POST",
   data:$(this).serialize(),
   dataType:"json",
   beforeSend:function()
   {
    $('#login').attr('disabled','disabled');
   },
   success:function(data)
   {
    $('#login').attr('disabled', false);
    if(data.success)
    {
     $('#captcha_form')[0].reset();
     $('#UserName_error').text('');
     $('#password_error').text('');
     $('#captcha_error').text('');
     grecaptcha.reset();
     alert('Form Successfully validated');
    }
    else
    {
     $('#UserName_error').text(data.first_name_error);
     $('#password_error').text(data.password_error);
     $('#captcha_error').text(data.captcha_error);
    }
   }
  })
 });

