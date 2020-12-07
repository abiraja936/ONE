<?php
require_once('connection.php');
$result = mysqli_query($conn,"SELECT * FROM tbluser");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}
tr:nth-child(even) {
    background-color: white;
}
</style>

 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Company Name</td>
    <td>Comapany Email</td>
    <td>Phone Number</td>
    <td>Comapny Address</td>
    <td>State</td>
    <td>Postal Code</td>
    <td>GSTIN NO</td>

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["companyname"]; ?></td>
    <td><?php echo $row["comapanyemail"]; ?></td>
    <td><?php echo $row["PhoneNumber"]; ?></td>
    <td><?php echo $row["comapnyaddress"]; ?></td>
    <td><?php echo $row["State"]; ?></td>
    <td><?php echo $row["PostalCode"]; ?></td>
    <td><?php echo $row["GSTINNO"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>