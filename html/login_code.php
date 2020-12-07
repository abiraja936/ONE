<!--
Here, we write code for login.
-->
<?php
// include('Login.php');
require_once('connection.php');
$email = $password = $pwd = '';

if(isset($_POST['login']))
{


$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

if($email=="")
{
	echo"Email cannoot enter";
}
// if(empty($email))
// {
// 	$email_error='Please enter email ID';
// }
// if(empty($password))
// {
// 	$pwd_error='Please enter email ID';
// }


// $sql = "SELECT * FROM tbluser WHERE Email='$email' AND Password='$password'";
// $result = mysqli_query($conn, $sql);
// if(mysqli_num_rows($result) > 0)
// {
// 	while($row = mysqli_fetch_assoc($result))
// 	{
// 		$id = $row["ID"];
// 		$email = $row["Email"];
// 		session_start();
// 		$_SESSION['id'] = $id;
// 		$_SESSION['email'] = $email;
// 	}
// 	header("Location: welcome.php");
// }
// else
// {
// 	echo "Invalid email or password";
// }



}
?>