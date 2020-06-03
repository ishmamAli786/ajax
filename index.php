<?php
$con=mysqli_connect('localhost','root','','test') or die("connection failed");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="jquery/jquery.js"></script>
</head>
<body class="container">
<h2 class="text-center text-danger">Get Data From DataBase</h2>
<form>
UserName : <input type="text" name="" class="form-control"><br>
Password : <input type="text" name="" class="form-control"><br>
Degree : <select class="form-control" onchange="myfun(this.value)">
<option>Select Any one</option>
<?php
$q="select * from degree";
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_assoc($result)){
    ?>
    <option value="<?php echo $row['mid'];?>"> <?php echo $row['degrees'];?></option>
    <?php
}
?>
</select><br>
Class : <select class="form-control" id="dataget">
<option>Choose anyone</option>
</select><br><br>
<button class="btn btn-success">Submitted</button>
</form>
<div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    function myfun(datavalue){
        $.ajax({
            url:'class.php',
            type:'POST',
            data:{'datapost:datavalue'},
            success: function(result){
                $('#dataget').html(result);
            }
        });
    }
});
</script>
</body>
</html>