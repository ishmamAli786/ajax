<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting data into database using php  and ajax</title>
</head>
<body>
    <table id="main" border="0" cellspacing="0">
    <tr>
    <td id="header">
    <h1>Add records with php and ajax</h1>
    </td>
    </tr>
    <tr>
    <td id="table-form">
    First Name : <input type="text" id="fname">$nbsp;$nbsp;$nbsp;$nbsp;$nbsp;
    Last Name : <input type="text" id="lname">
    <input type="submit" id="save-button" value="Save">
    </td>
    </tr>
    <tr>
    <td id="table-data">
    </td>
    </tr>
    </table> 
    <script src="jquery/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        function loadTable(){
            $.ajax({
                url:'ajax-load.php',
                type:"POST",
                success: function(data){
                    $('#table-data').html(data);
                }
            });
        }
        loadTable();
    });
    </script>
</body>
</html>