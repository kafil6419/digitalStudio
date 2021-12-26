<?php
include 'header.php'?>
<?php
$track1=$_POST['track'];

$conn=mysqli_connect("localhost","root","","Studio");

$sql1="select *from booking_video where bookingId='$track1' or mobileNo='$track1'";
$sql2="select *from printphoto where printingId='$track1' or mobileNo='$track1'";
$result1=mysqli_query($conn,$sql1) or die("result1 not found");
$result2=mysqli_query($conn,$sql2) or die("result2 not found");
if(mysqli_num_rows($result1)==1){
  $row1=mysqli_fetch_assoc($result1);
  $status1=$row1['Status_Booking'];

  echo"<div class='container-fluid'>
  <div class='row'>
    <div class='col'>
      <p class='lead'>Your Current status </p>
    </div>
  </div>
  <div class='row'>
    <div class='col'>
  <p>$status1</p>
  </div>
</div>";
}
else if(mysqli_num_rows($result2)==1){
  $row2=mysqli_fetch_assoc($result2);
  $status2=$row2['Status_photo'];
  echo"<div class='container-fluid'>
  <div class='row'>
    <div class='col'>
      <p class='lead'>Your Current status </p>
    </div>
  </div>
  <div class='row'>
    <div class='col'>
  <p>$status2</p>
  </div>
</div>";
}
else{
  echo "<p class='lead'>Please enter the correct Id or mobile number</p>";
}

?>

