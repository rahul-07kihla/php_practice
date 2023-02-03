<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form method="post" id="myForm">
        <input type="text" name="user"><br>
        <input type="password" name="pass"><br>
        <input type="submit" value="submit" id="smt">
    </form>
    <div id="response"></div>
<script>
$(document).ready(function () {
    $('form').submit(function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "action.php",
            data: formData,
            beforeSend:function(){ 
                $('#response').html('<span class="text-info">Loading response...</span>');  
            },
            success: function (msg) {
                $("#response").html("<p>" + msg + "</p>");
            }
        });
    });
});
</script>
</body>
</html>