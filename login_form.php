<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-image: url('./image/theatre_2_1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff;
        }
        .parent-container {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .loginholder {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: #000;
        }
        .loginholder img {
            margin-bottom: 20px;
        }
        .inputbox {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn-normal {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-normal:hover {
            background-color: #0056b3;
        }
        .forgetpassword a, .register-now a {
            color: #007bff;
            text-decoration: none;
        }
        .forgetpassword a:hover, .register-now a:hover {
            text-decoration: underline;
        }
        #nameerror, #passerror, #msg {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="parent-container">
        <div class="loginholder">
            <a href="./index.html"><img src="img/logo2.png" alt="Logo" width="180px"></a>
            <div class="form-group">
                <label for="username"><b>User Id:</b></label>
                <input type="text" class="form-control inputbox" id="username"/>
                <p id="nameerror"></p>
            </div>
            <div class="form-group">
                <label for="password"><b>Password:</b></label>
                <input type="password" class="form-control inputbox" id="password"/>
                <p id="passerror"></p>
                <div id="msg"></div>
            </div>
            <button class="btn btn-normal" id="login">LOGIN</button>
            <br><br>
            <span class="forgetpassword"><a href="forget_password.php">Forget your Password?</a></span><br>
            <span class="register-now"><a href="register_form.php">Register now</a></span><br>
            <hr>
            <span class="forgetpassword"><a href="./admin/index.php">Savoy Staff</a></span>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#login").click(function(){
                var username = $("#username").val().trim();
                var password = $("#password").val().trim();

                if(username == "") {
                    var error = " <font color='red'>!Require Name.</font> ";
                    $("#nameerror").html(error);
                    return false;
                }
                if(password == "") {
                    var error = " <font color='red'>!Require Password.</font> ";
                    $("#passerror").html(error);
                    return false;
                }
                $.ajax({
                    url: 'login.php',
                    type: 'post',
                    data: {username: username, password: password},
                    success: function(response){
                        if(response == 1){
                            window.location = "index.php";
                        } else {
                            var error = " <font color='red'>!Invalid UserId or Password.</font> ";
                            $("#msg").html(error);
                            return false;
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
