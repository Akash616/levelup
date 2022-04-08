
<?php include('connection.php');
session_start();
$id = $_GET['MnoQtyPXZORTE'];
$message = $login = '';
$_SESSION['user'] = $id;
if ($_SESSION['user'] == '') {
		header("location:forgotpassword.php");
}
else
{
if(isset($_POST['submit'])) {
	$password = $_POST['password'];
	$Repassword = $_POST['Repassword'];

	if ($password !== $Repassword) {
		$message = "<div class='alert alert-danger'>Password Not Match..!!</div>";
	}
	else{
	$id_decode = base64_decode($id);
	$query = "UPDATE you_tube SET password = '$password' WHERE id = '$id_decode' ";
	$result = $conn->query($query);
		if($result){
			$message = "<div class='alert alert-success'>Reset Your Password Successfully..</div>";
			$login = "<a href='index.php' class='btn btn-success btn-sm'>Login</a>";
	}else{
		$message = "<div class='alert alert-danger'>Failed to Reset Password..!!</div>";
	}
	}
}
}
?>

                
                

                

                 
                 

                 <div class="card-body"> 
                     <form action="includes/login.php" method="POST">
    
                         <label for="password">Password</label>
				<input type="text" name="password" placeholder="Password" class="form-control form-control-sm" required><br>
				<label for="password">Retype Password</label>
				<input type="text" name="Repassword" placeholder="Retype Password" class="form-control form-control-sm" required><br>
				<button type="submit" name="submit" class="btn btn-success btn-sm">Reset Password</button> <?php echo $login; ?>
                         
                     </form>
                 </div>

