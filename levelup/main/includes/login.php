<?php
    session_start();
    require_once('connection.php');


    if(isset($_POST['login']))
    {
        if(empty($_POST['UserName']) || empty($_POST['password'])||empty($_POST['g-recaptcha-response']) )
        {
            header("location: ../logindesign.php?empty");
            exit();
        }
        else
        {
            $UserName = mysqli_real_escape_string($con,$_POST['UserName']);
            $Password = mysqli_real_escape_string($con,$_POST['password']);

            $Query = " select * from userlogin where UserName='".$UserName."' or Email='".$UserName."'";
            $result = mysqli_query($con,$Query);
            

            if($row=mysqli_fetch_assoc($result))
            {
                $HashPass = password_verify($Password,$row['password']);

                if($HashPass==false)
                {
                    header("location: ../logindesign.php?P_Invalid");
                    exit();
                }
               

                elseif($HashPass==true)
                {
                    $_SESSION['Userid']=$row['Userid'];
                    $_SESSION['FName']=$row['FName'];
                    $_SESSION['LName']=$row['LName'];
                    $_SESSION['Email']=$row['Email'];
                    $_SESSION['UserName']=$row['UserName'];
                    $_SESSION['password']=$row['password'];
                    header("location: ../index.php#contact_us");
                    exit();

                }

            }
            else
            {
                header("location: ../logindesign.php?U_Invalid");
                exit();
            }
            
        }


    }
    else
    {
        header("location: ../logindesign.php");
        exit();
    }

?>