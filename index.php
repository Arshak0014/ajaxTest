<?php session_start() ?>
<!doctype html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
<!--<form id="loginform" method="post">-->
<!--    <div>-->
<!--        Username:-->
<!--        <input type="text" name="username" id="username" />-->
<!--        Password:-->
<!--        <input type="password" name="password" id="password" />-->
<!--        <input type="submit" name="loginBtn" id="loginBtn" value="Login" />-->
<!--    </div>-->
<!--</form>-->
<input type="submit" name="loginBtn" id="loginBtn" value="Login" />

<div class="results"><?= count($_SESSION) ?></div>

<script type="text/javascript">


    $('#loginBtn').click(function (e) {
        var username = $('#username').val();
        var password = $('#password').val();
        e.preventDefault();

        $.ajax({
            dataType: 'json',
            url: 'test.php?action=sample5',
            success: function(jsondata){
                $('.results').html('Name = ' + jsondata.name + ', Nickname = ' + jsondata.nickname);
            }
        });




    })


</script>
</body>
</html>
