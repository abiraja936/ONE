<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');
$id = $_SESSION['id'];
$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$email = $row["Email"];
		$gender = $row["Gender"];
	}
	
}
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
              <h3 class="fw-normal">Welcome <?php echo $fname." ".$lname; ?></h3>
            
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
        <h1 class="wow fadeInUp">Company Details <br>
        </h1>

        <form method="POST" class="mt-5">
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Company Name</label>
            <input type="text" class="form-control" name="cname"  id="name">
          </div>
		  
		  <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Company address</label>
            <input type="text" class="form-control" name="cadd"  id="email">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="email" class="fw-medium fg-grey">Company Email</label>
            <input type="text" class="form-control" name="cemail"  id="email">
          </div>
		  
		  <div class="form-group wow fadeInUp">
            <label for="email" class="fw-medium fg-grey">PhoneNumber</label>
            <input type="text" class="form-control" name="pnumber" id="email">
          </div>
		  
		  <div class="form-group wow fadeInUp">
            <label for="email" class="fw-medium fg-grey">State</label>
            <input type="text" class="form-control" name="State"id="email">
          </div>
		  
		  <div class="form-group wow fadeInUp">
            <label for="email" class="fw-medium fg-grey">PostalCode</label>
            <input type="text" class="form-control" name="pcode"  id="email">
          </div>
		  
		  <div class="form-group wow fadeInUp">
            <label for="pwd" class="fw-medium fg-grey">GSTINNO</label>
            <input type="text" name="gstin" class="form-control" id="email">
          </div>

          <div class="form-group mt-4 wow fadeInUp">
            <button type="submit" name="create" class="btn btn-primary">Submit</button>
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
$cname = $_POST['cname'];
$cadd = $_POST['cadd'];
$cemail = $_POST['cemail'];
$pnumber = $_POST['pnumber'];
$State = $_POST['State'];
$pcode = $_POST['pcode'];
$gstin = $_POST['gstin'];

	if($cname=="")
	{
		echo '<script>alert("Enter Company NAme")</script>'; 
	}
	if($cadd=="")
	{
	  echo '<script>alert("Enter Company Address")</script>'; 
	
	}
	if($cemail=="")
	{
	  echo '<script>alert("Enter Company Email")</script>'; 
	
	}
	if($pnumber=="")
	{
	  echo '<script>alert("Enter Phone Number")</script>'; 
	
	}
	if($State=="")
	{
	  echo '<script>alert("Enter State")</script>'; 
	
	}
	if($pcode=="")
	{
	  echo '<script>alert("Enter Postal Code")</script>'; 
	
	}if($gstin=="")
	{
	  echo '<script>alert("Enter GSTIN NO")</script>'; 
	
	}
	
	else{
		$id = $_SESSION['id'];
	$sql = "UPDATE tbluser  SET companyname='$cname', comapnyaddress='$cadd' ,
	State = '$State ' , PostalCode = '$pcode' ,GSTINNO = '$gstin' ,
	 PhoneNumber = '$pnumber ', comapanyemail ='$cemail'
	WHERE ID= $id  ";
	$result = mysqli_query($conn, $sql);
	if($result)
	{
		echo '<script>alert("Your Company Data Enter Sucessfully")</script>'; 
		//header("Location: viewdata.php");
	}

	}
}
//}
?>