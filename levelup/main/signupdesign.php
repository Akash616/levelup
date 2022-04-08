
            <?php include 'Header.php';?>

 <div class="container">
     <div class="row">
         <div class="col-lg-6 m-auto">
             <div class="card bg-light mt-5">
                 <div class="card-title bg-primary text-white mt-5">
                     <h3 class="text-center py-2">Signup Form</h3>
                 </div>

                 <?php
                    
                        if(isset($_GET['empty']))
                        {
                            $Message=$_GET['empty'];
                            $Message= " Please Fill in the Blanks";
                    ?>
                 <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                 <?php                            
                        }
                    
                    ?>


                 <?php
                    
                        if(isset($_GET['empty']))
                        {
                            $Message=$_GET['empty'];
                            $Message= " Empty fields";
                    ?>
                 <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                 <?php                            
                        }
                    
                    ?>


                 <?php
                    
                        if(isset($_GET['Invalid']))
                        {
                            $Message=$_GET['Invalid'];
                            $Message= " Invalid Character";
                    ?>
                 <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                 <?php                            
                        }
                    ?>

                 <?php
                    
                        if(isset($_GET['VEmail']))
                        {
                            $Message=$_GET['VEmail'];
                            $Message= " Invalid Email";
                    ?>
                 <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                 <?php                            
                        }
                    
                    ?>

                 <?php
                    
                        if(isset($_GET['User']))
                        {
                            $Message=$_GET['User'];
                            $Message= " User already taken";
                    ?>
                 <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                 <?php                            
                        }
                    
                    ?>

                 <?php
                    
                        if(isset($_GET['Email']))
                        {
                            $Message=$_GET['Email'];
                            $Message= " Email already taken";
                                             
                    ?>
                 <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                 <?php                            
                        }
                    
                    ?>

                 <?php
                    
                        if(isset($_GET['success']))
                        {
                            $Message=$_GET['success'];
                            $Message= " Sucessful";
                             header("Location: logindesign.php");
                    ?>
                 <div class="alert alert-success"><?php echo $Message ?></div>
                 <?php                            
                        }
                    
                    ?>
                 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>




                 <div class="card-body">

                     <form action="includes/signup.php" method="POST">
                         <label>FirstName <span class="text-danger">*</span></label>
                         <input type="text" name="FName" placeholder="First Name" class="form-control my-2">
                          <label>LastName <span class="text-danger">*</span></label>
                         <input type="text" name="LName" placeholder="Last Name" class="form-control mb-3">
                          <label>Email <span class="text-danger">*</span></label>
                         <input type="text" name="Email" placeholder="Email" class="form-control mb-3">
                         <label>UserName <span class="text-danger">*</span></label> 
                         <input type="text" name="UserName" placeholder="User Name" class="form-control mb-3">
                          <label>Password <span class="text-danger">*</span></label>
                         <input type="password" name="password" placeholder="Password" class="form-control mb-3" id="myInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                         <input type="checkbox" onclick="myFunction()">Show Password
                         <button class="btn btn-success btn-lg float-right" name="signup" class="pt-3"> Signup</button>
                     </form>

                 </div>
             </div>
         </div>
     </div>
 </div>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
				
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

