<?php
$con=mysqli_connect('localhost','root','','test') or die("connection failed");
extract($_POST);
if(isset($_POST['submit'])){
$q="insert into  ajaxinsert(username,password) value('$username','$password')";
$run=mysqli_query($con,$q);
header('location:insertdatausingajaxphp.php');
}
?>