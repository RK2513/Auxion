<?php 
ob_start();
include 'database.php';

$photo=$_FILES['profile']['name'];
$first_name=$_POST['f_name'];
$last_name=$_POST['l_name'];
$email=$_POST['mail'];
$pass=$_POST['pwd'];
$dob=$_POST['dob'];
$gender=$_POST['gen'];
$address=$_POST['add'];
$phne=$_POST['ph'];
$filename = $_FILES['profile']['name'];
$tempname = $_FILES['profile']['tmp_name'];
$folder = ".profile/" . $filename;

$i="insert into user_registration values('','".$photo."','".$first_name."','".$last_name."','".$email."','".$pass."','".$dob."','".$gender."','".$address."','".$phne."')";

$vv=mysqli_query($con,$i) or die("error".mysqli_error($con));
if (move_uploaded_file($tempname, $folder)) {
    echo "<h3>  Image uploaded successfully!</h3>";
} else {
    echo "<h3>  Failed to upload image!</h3>";
}

if($vv)
{
//echo ("registed");
header("location:user.php");
}
else
{
echo ("Not registed");
}
?>