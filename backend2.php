<?php
include('config.php');

$name=$_GET['name'];
$category=$_GET['category'];
$profile=$_GET['profile'];
$description=$_GET['description'];


$add="insert into doctors(name,category,profile,description) values('$name','$category','$profile','$description')";

$store=mysqli_query($conn,$add);
if($store){
    echo "<script>alert('Data stored Successfully');window.location.href='contact.html'</script>";
}
else{

    die(mysqli_error($conn));

}

?>