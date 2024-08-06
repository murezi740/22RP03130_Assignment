<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT MANAGEMENT SYSTEM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        .button {
            display: inline-block;
            margin: 10px 20px;
            padding: 15px 30px;
            border: none;
            border-radius: 30px;
            text-decoration: none;
            color: white;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .button-register {
            background-color: green;
        }
        .button-register:hover {
            background-color: darkgreen;
        }
        .button-login {
            background-color: grey;
        }
        .button-login:hover {
            background-color: darkgrey;
        }
        a {
            color: inherit;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <form>
        <h1>STUDENT MANAGEMENT SYSTEM</h1>
        <a href="admin_register.php" class="button button-register">REGISTER</a>
        <a href="login.php" class="button button-login">LOGIN</a>
    </form>
</body>
</html>
