<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form submitted using ajax in php and mysqli</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="jquery/jquery.js"></script>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-lg-12"><br>
    <h3 class="text-center text-success text-uppercase">Form submitted using ajax in php and mysqli</h3>
    <form>
    <div class="form-group">
    <label for="user">Username : </label>
    <input type="text" name="user" id="user" class="form-control">
    </div>
    <div class="form-group">
    <label for="password">Password : </label>
    <input type="text" name="password" id="password" class="form-control">
    </div>
    <div class="form-group">
    <label>Choose State</label>
    <select class="form-control" onchange="myfun(this.value)">
    <option>Select State</option>
    <option>Karachi</option>
    <option>Lahore</option>
    <option>Islamabad</option>
    </select>
    </div>
    <div class="form-group">
    <label>Choose State</label>
    <select class="form-control" id="city">
    <option>Select city</option>
    </select>
    </div>
    </form>
    </div>
    </div>
    </div>
    <script type="text/javascript">
        function myfun(data){
        var req=new XMLHttpRequest();
        req.open("GET","response.php?datavalue="+data,true);
        req.send()
        req.onreadystatechange=function(){
            if(req.readyState ==4 && req.status==200){
                document.getElementById('city').innerHTML=req.responseText;
            }
        }
        }
    </script>
</body>
</html>