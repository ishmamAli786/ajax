<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post Method in jquery</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="jquery/jquery.js"></script>
</head>
<body>
<div class="container">
<p id="changehere">This line is going to be changed</p>
<button class="btn btn-success btnclick">Click</button>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('.btnclick').click(function(){
        $.post('pooost.php',){
            name : "ishmamalikhan",
            subs: "subscribe",
        },function(data,status){
            $('#changehere').html(data);
            alert(status);
        });
    });
});
</script>
</body>
</html>