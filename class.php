<?php
$con=mysqli_connect('localhost','root','','test') or die("connection failed");
$nameid=$_POST['datapost'];
$q="select * from classes where mid='$nameid'";
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_assoc($result)){
    ?>
    <option> <?php echo $row['class'];?></option>
    <?php
}
?>