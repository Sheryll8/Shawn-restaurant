<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/login/css/login.css">
    <title>Rich Restaurant Homepage</title>

    <style>
        body{
            background-image: url("http://localhost/login/pics/rest.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            object-fit: contain;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="innerContainer">
            <form action="log.php" method="POST" class="form">
                <div class="title">
                    <h1>Login</h1>
                </div>
                <div>
                    <input type="text" name="EMPLOYEE NAME" placeholder="Enter your user name" class="form_input">
                </div>
                <div>
                    <input type="text" name="ZONE" placeholder="Enter you work zone" class="form_input">
                    </div>
                <div>
                    <input type="password" name="EMPLOYEE NUMBER" placeholder="Enter your employee code" class="form_input">
                </div>
                    <input type="submit" name="submit" value="SUBMIT" class="btn_submit" >
            </form>
        </div>
    </div>
</body>
</html>