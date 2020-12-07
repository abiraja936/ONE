<!--
Into this file, we create a layout for registration page.
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

  <title>SAS IMPEX</title>

  <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.min.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/mobster.css">

</head>

<body><div class="page-hero-section bg-image hero-mini" style="background-image: url(../assets/img/hero_mini.svg);">
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
          <div class="col-lg-6">
            <nav aria-label="breadcrumb">
              <h3 class="fw-normal">Register</h3>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 py-3 mb-5 mb-lg-0">
        <div class="img-place w-lg-75 wow zoomIn">
          <img src="../assets/img/illustration_contact.svg" alt="">
        </div>
      </div>
      <div class="col-lg-5 py-3">
        <h1 class="wow fadeInUp">User Registration <br>
        </h1>

        <form method="POST" class="mt-5">
          <div class="form-group wow fadeInUp">
            <label for="firstname" class="fw-medium fg-grey">First name</label>
            <input type="text" class="form-control" name="firstname" id="name">
          </div>
		  
		  <div class="form-group wow fadeInUp">
            <label for="lastname" class="fw-medium fg-grey">Last name</label>
            <input type="text" class="form-control" name="lastname" id="name">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="email" class="fw-medium fg-grey">Email</label>
            <input type="text" class="form-control" name="email" id="email">
          </div>
		  
		  <div class="form-group wow fadeInUp">
            <label for="pwd" class="fw-medium fg-grey">Password</label>
            <input type="password" name="password" class="form-control" id="email">
          </div>

          <div class="form-group mt-4 wow fadeInUp">
            <button type="submit" name="create" class="btn btn-primary">Register </button>
          </div>
		  
        </form>
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


<?php

require_once('connection.php');
$fname = $lname = $email = $password = $pwd = '';
if(isset($_POST['create']))
{
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
//$gender = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

if($fname==""  )
{
	echo '<script>alert("Enter your FirstName")</script>'; 
}
if($lname=="")
{
  echo '<script>alert("Enter your lastname")</script>'; 

}
if($email=="")
{
  echo '<script>alert("Enter your email")</script>'; 

}
if($pwd=="")
{
  echo '<script>alert("create your Password")</script>'; 

}
else{
//Please read one you create table name and coumn name ==> mannully created comapny registration (example: comapnay name:none)
$sql = "INSERT INTO tbluser (Firstname,Lastname,Gender,Email,Password,
companyname,comapnyaddress,State,PostalCode,GSTINNO,
PhoneNumber,comapanyemail) VALUES ('$fname','$lname','male','$email','$password',
'None','None','None','None','None','None','None')";
$result = mysqli_query($conn, $sql);
if($result)
{
//	header("Location: login.php");

echo '<script>alert("You Data Sucessfully Register")</script>'; 
}
else
{
	echo "Error :".$sql;
	header("Location: registration.php");
}
}
}
?>