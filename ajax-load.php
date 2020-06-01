<?php
$con=mysqli_connect('localhost','root','','test') or die("connection  failed");
$q="select * from student";
$run=mysqli_query($con,$q) or die("SQL query failed");
if(mysqli_num_rows($run)>0){
    $output='<table border="1px" width="100%" cellspacing="0" cellpadding="10px> 
    <tr>
    <th>Id</th>
    <th>name</th>
    <th>email</th>
    <th>password</th>
    </tr>';
    while($row=mysqli_fetch_assoc($run)){
        $output .="<tr><td>{row['id']}</td><td>{row['name']}</td><td>{row['email']}</td><td>{row['password']}</td></tr>";
    }
    $output .="</table>";
    mysqli_close($con);
    echo $output;
}else{
    echo "no record found";
}

?>