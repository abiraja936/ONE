<!--
Into this file, we create a layout for login page.
-->
<?php
include_once('header.php');
include_once('link.php');
?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>SAS iMPEX</title>

  <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.min.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/mobster.css">
</head>
<body>
<div class="page-hero-section bg-image hero-mini" style="background-image: url(../assets/img/hero_mini.svg);">
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
          <div class="col-lg-6">

            <nav aria-label="breadcrumb"> 
              <h3 class="fw-normal">Login</h3>
            <form method="POST" class="mt-3">
              <div class="form-group" >	
                <input type="text" class="form-control" name="email" id="email" placeholder="email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" id="pwd" placeholder="password">
              </div>
              <div class="form-group mt-4">
                <button type="submit" name="login" class="btn btn-secondary">LOGIN</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 <!-- .bg-light -->
<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 2000); 
}
</script>
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/mobster.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>

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
	echo '<script>alert("Please enter user email id ")</script>'; 
}
elseif($pwd=="")
{
	echo '<script>alert("Please enter user Password ")</script>'; 
}
else
{
  $sql = "SELECT * FROM tbluser WHERE Email='$email' AND Password='$password'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_assoc($result))
    {
      $id = $row["ID"];
      $email = $row["Email"];
      session_start();
      $_SESSION['id'] = $id;
      $_SESSION['email'] = $email;
    }
    header("Location: welcome.php");
  }
   else
   {
    echo '<script>alert("Incorrect email id and Password ")</script>';  
   }
}

}

?>