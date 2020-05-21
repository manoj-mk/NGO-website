
    
<?php

$name=$_POST['new_Donor_name'];
$email_id=$_POST['donors_email'];
$contact_no=$_POST['donors_mobile'];
$country=$_POST['donors_country'];
$state=$_POST['donors_state'];
$city=$_POST['donors_city'];
$pincode=$_POST['donors_pincode'];
$amount=$_POST['donors_amount'];



$conn=mysqli_connect("localhost","root","","minor");

$sql="select * from signup";

$result=mysqli_query($conn,$sql);

$cnt=mysqli_num_rows($result);


    $sql="insert into signup values('".$name."','".$email_id."','".$contact_no."','".$country."','".$state."','".$city."','".$pincode."','".$amount."')";

    $result=mysqli_query($conn,$sql);
    header("refresh:0;url='payment.html'");


?>









