<?php
include('config.php');

$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$date=$_GET['date'];
$department=$_GET['department'];
$message=$_GET['message'];


$add="insert into appointment(name,email,phoneno,appointmentdate,department,message) values('$name','$email','$phone','$date','$department','$message')";

$store=mysqli_query($conn,$add);
if($store){
    echo "<script>alert('Data stored Successfully');window.location.href='doctors.php'</script>";
}
else{

    die(mysqli_error($conn));

}

?>