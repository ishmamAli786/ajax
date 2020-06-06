<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <label>FirstName : </label>
    <input type="text" name="fname" id="fname" placeholder="ENTER YOUR FIRST NAME HERE" class="form-control">
    <label>LastName : </label>
    <input type="text" name="lname" id="lname" placeholder="ENTER YOUR Last NAME HERE" class="form-control">
    <label>Email Id : </label>
    <input type="text" name="email" id="email" placeholder="ENTER your Email" class="form-control">
    <label>Mobile No : </label>
    <input type="text" name="mno" id="mno" placeholder="ENTER YOUR MOBILE NUMBER" class="form-control">
    <input type="submit" name="submit" value="Save" onclick="add()">
    </div>
    <script src="jquery/jquery.js"></script>
    <script type="text/javascript">
    function add(){
        var firstname=$('#fname').val();
        var lastname=$('#lname').val();
        var email=$('#email').val();
        var mobile=$('#mno').val();
        $.ajax({
            url:"backend1.php",
            type:'post',
            data:{firstname:firstname,
            lastname:lastname,
            email:email,
            mobile:mobile
            },
            success:function(data,status){
                readRecord();
            }
        });
    }
    </script>
</body>
</html>