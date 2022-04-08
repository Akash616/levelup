


<?php 

    require_once('connection.php');

    if(isset($_POST['contact_us']))
    {

        if(empty($_POST['fname']) ||empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['phn']) || empty($_POST['sub']) || empty($_POST['msg']))
        {
            header("location: ../index.php?empty");
        }
        else
        {
            $fname=mysqli_real_escape_string($con,$_POST['fname']);
            $lname=mysqli_real_escape_string($con,$_POST['lname']);
            $email=mysqli_real_escape_string($con,$_POST['email']);
            $phn=mysqli_real_escape_string($con,$_POST['phn']);
            $sub=mysqli_real_escape_string($con,$_POST['sub']);
            $msg=mysqli_real_escape_string($con,$_POST['msg']);

            if(!preg_match("/^[a-zA-Z]*$/",$fname) || !preg_match("/^[a-zA-Z]*$/",$lname))
            {
                header("location: ../index.php?Invalid");
                exit();
            }
            else
            {
                if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                {
                    header("location: ../index.php?VEmail");
                    exit();
                }
                else
                        {
                            $query = " insert into contactus(fname,lname,email,phno,subject,message) values ('$fname', '$lname', '$email', '$phn','$sub','$msg')";
                            $result = mysqli_query($con,$query);
                            header("location: ../index.php?success");
                            exit();                                
                            
                        }
            }
        }
    }
 else
    {
        header("location: ../index.php");
        exit();
    }

?>
