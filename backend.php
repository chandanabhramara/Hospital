<?php
include('config.php');

$name=$_GET['name'];
$email=$_GET['email'];
$subject=$_GET['subject'];
$messages=$_GET['message'];


$add="insert into conta(name,email,subject,messages) values('$name','$email','$subject','$messages')";

$store=mysqli_query($conn,$add);
if($store){
    echo "<script>alert('Data stored Successfully');window.location.href='contact.html'</script>";
}
else{

    die(mysqli_error($conn));

}

?>