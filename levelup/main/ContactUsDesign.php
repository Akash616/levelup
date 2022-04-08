
<div class="wrapper">
    <h4 class="sent-notification"></h4>
    <form class="contact-form" action="includes/contactus.php" method="POST" id="myForm">
        <h2 class="h2-contact">CONTACT US</h2>
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
                    
                        if(isset($_GET['success']))
                        {
                            $Message=$_GET['success'];
                             $Message=" THANK'S FOR CONTACTING US. WE REPLY AS SOON AS POSSIBLE";
                     ?>
        <div class="alert alert-success text-center"><?php echo $Message ?></div>
        <?php
                        }
        ?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.callout {
  position: fixed;
  bottom: 35px;
  right: 20px;
  margin-left: 20px;
  max-width: 300px;
}

.callout-header {
  padding: 25px 15px;
  background: #555;
  font-size: 30px;
  color: white;
}

.callout-container {
  padding: 15px;
  background-color: #ccc;
  color: black
}

.closebtn {
  position: absolute;
  top: 5px;
  right: 15px;
  color: white;
  font-size: 30px;
  cursor: pointer;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>
<div class="callout">
  <div class="callout-header">contact us</div>
   
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <div class="callout-container">
    <p>please! Login first for contacting. <a href="logindesign.php">Login</a> or close it if it is in your way.</p>
  </div>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var fname = $("#fname");
            var lname = $("#lname");
            var email = $("#email");
            var phn = $("#phn");
            var sub = $("#sub");
            var msg = $("#msg");

            if (isNotEmpty(fname) && isNotEmpty(lname) && isNotEmpty(email) && isNotEmpty(phn) && isNotEmpty(sub) && isNotEmpty(msg)) {
                $.ajax({
                   url: 'SendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       fname: fname.val(),
                       lname: lname.val(),
                       email: email.val(),
                       phn: phn.val(),
                       sub: sub.val(),
                       msg: msg.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
</body>
</html>
                      
        
     
            <div class="input-fields">
            <input id="fname" type="text" name="fname" class="input" placeholder="First Name">
            <input id="lname" type="text" name="lname" class="input" placeholder="Last Name">
            <input id="email" type="text" name="email" class="input" placeholder="Email Address">
            <input id="phn" type="text" name="phn" class="input" placeholder="Phone">
            <input id="sub" type="text" name="sub" class="input" placeholder="Subject">
        </div>
        <div class="msg">
            <textarea id="msg"name="msg" placeholder="Message"></textarea>
            <button class="btn1" name="contact_us" onclick="sendEmail()" value="Send An Email">send <i class="fas fa-paper-plane"></i></button>
        </div>
    </form>
</div>

