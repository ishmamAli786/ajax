<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert data into database using  ajax in php</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="jquery/jquery.js"></script>
</head>
<body>
<div class="container">
<h1 class="text-center text-primary" >Insert Data into Database using ajax in php and Mysqli</h1><br>
<form id="myform" action="insertdata.php" method="POST">
<div class="col-lg-8 m-auto">
<div class="from-group">
<label>Username : </label>
<input type="text" name="username" class="form-control">
</div>
<div class="from-group">
<label>Password : </label>
<input type="password" name="password" class="form-control">
</div>
<input type="submit" name="submit" value="submit" id="submit "class="btn btn-success">
</form>
</div>
<div>
<h1 class="text-center text-success" >Display Data using ajax in php and mysqli</h1><br>
<button id="displaydata" class="btn btn-danger">Display</button>
<table class="table table-striped table-bordered text-center">
<thead>
<th>Id</th>
<th>Name</th>
<th>Password</th>
</thead>
<tbody id="response">
</tbody>
</table>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    var form=$('#myform');
    $('#submit').click(function(){
        $.ajax({
            url:form.attr("action"),
            type: 'post',
            data:$("#myform input").serialize(),
            success: function(data){
                console.log(data);
            }
        });
    });
});
</script>
<script>
$(document).ready(function(){
    $('#displaydata').click(function(){
        $.ajax({
            url:'displaydatausingajaxphp.php',
            type:'post',
            success:function(responsedata){
                $('#response').html(responsedata);
            }
        });
    });
});
</script>
</body>
</html>