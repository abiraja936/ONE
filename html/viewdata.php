<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');
$id = $_SESSION['id'];
$fname = $lname = $email =  '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
        $companyname = $row["companyname"];
        $comapanyemail = $row["comapanyemail"];
	    	$comapnyaddress = $row["comapnyaddress"];
        $PhoneNumber = $row["PhoneNumber"];
        $State = $row["State"];
        $PostalCode = $row["PostalCode"];
        $GSTINNO = $row["GSTINNO"];
	}
}
if(isset($_POST['edit']))
{
  header("Location: edit.php");

}
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
<body>
<div class="page-hero-section bg-image hero-mini" style="background-image: url(../assets/img/hero_mini.svg);">
  <div class="hero-caption">
    <div class="container fg-white h-100">
      <div class="row justify-content-center align-items-center text-center h-100">
        <div class="col-lg-6" >
          <h3 class="mb-4 fw-medium">Your Company</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">your Company</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-section pt-8" >
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8" >
       
        <table class="table fg-indigo"  style="font-size:23px;">
          	<tr  >
          		<td>companyname</td>
          		<td><?php echo $companyname; ?></td>
          	</tr>
          	<tr>
          		<td>comapanyemail</td>
          		<td><?php echo $comapanyemail; ?></td>
          	</tr>
          	<tr>
          		<td>comapnyaddress</td>
          		<td><?php echo $comapnyaddress; ?></td>
          	</tr>
          	<tr>
          		<td>PhoneNumber</td>
          		<td><?php echo $PhoneNumber; ?></td>
          	</tr>

              <tr>
          		<td>State</td>
          		<td><?php echo $State; ?></td>
          	</tr>
              <tr>
          		<td>PostalCode</td>
          		<td><?php echo $PostalCode; ?></td>
          	</tr>

              <tr>
          		<td>GSTINNO</td>
          		<td><?php echo $GSTINNO; ?></td>
          	</tr>

          </table>
        </div>
      </div>
    </div>
  </div>
</div>

</main> <!-- .bg-light -->


<div class="page-footer-section bg-dark fg-white" style="font-size:20px;">
  <div class="container" >
    <div class="row mb-5 py-3">
      <div class="col-sm-6 col-lg-2 py-3">
        <!-- <h5 class="mb-3">Who are you</h5> -->
        <!-- <ul class="menu-link">
          <li><a href="index.html" class=""></a>Home</li>
          <li><a href="about.html" class=""></a>About</li>
          <li><a href="home.html" class=""></a>Services</li>
          <li><a href="contact.html" class=""></a>Contact us</li>
        </ul> -->
      </div>
      <div class="col-sm-6 col-lg-2 py-3">
        <h5 class="mb-3">Who are you</h5>
        <ul class="menu-link">
          <li><a href="index.html" class="">Home</a></li>
          <li><a href="about.html" class="">About</a></li>
          <li><a href="home.html" class="">Services</a></li>
          <li><a href="contact.html" class="">Contact us</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-4 py-3">
        <!-- <h5 class="mb-3">News letter</h5> -->
       
      </div>
      <div class="col-md-6 col-lg-4 py-3">
        <h5 class="mb-3">Address us</h5>
        <p>10/11, JAYASIMMAPURAM,</p>
		<p>P N PALAYAM,Coimbatore-641037.</p>
        <!-- Social Media Button -->
        <div class="mt-4">
          <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-facebook"></span></a>
          <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-twitter"></span></a>
          <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-instagram"></span></a>
          <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-google"></span></a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 py-2">
        <!-- <img src="" alt="" width="40"> -->
        <!-- Please don't remove or modify the credits below -->
        <p class="d-inline-block ml-2">Copyright &copy; 
		<script>
            document.write(new Date().getFullYear())
			</script> All rights reserved  | by  SAS iMPEX</p>
      </div>
      <div class="col-12 col-md-6 py-2">
        <ul class="nav justify-content-end">
          <li class="nav-item"><a href="#" class="nav-link">Terms of Use</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Privacy Policy</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Cookie Policy</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

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


</body>
