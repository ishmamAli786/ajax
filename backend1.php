<?php
$con=mysqli_connect('localhost','root','','test') or die("connection failed");
extract($_POST);
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['mobile'])){
    $q="insert into crudtable(firstname,lastname,email,mobile) value('$firstname','$lastname','$email','$mobile')";
    mysqli_query($con,$q);
}

?>