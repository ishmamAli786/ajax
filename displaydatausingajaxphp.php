<?php
$con=mysqli_connect('localhost','root','','test') or die('connection failed');
$q="select * from ajaxinsert";
$run=mysqli_query($con,$q);
if(mysqli_num_rows($run)>0){
    while($result=mysqli_fetch_assoc($run)){
        ?>
        <tr>
        <td><?php echo $result['id']?></td>
        <td><?php echo $result['username']?></td>
        <td><?php echo $result['password']?></td>
        </tr>
        <?php
    }
}
?>