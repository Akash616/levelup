<?php
require('Header.php');
if(isset($_GET['Well']))
{
    if($_SESSION['Userid'])
    {
        header("location: index.php");
    }
else
    { 
    }
}
else
{
       header("location: logindesign.php");
       exit();
}

?>
