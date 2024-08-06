<?php
include('connnect1.php');
?>
<?php
session_start();

if(isset($_POST['login'])){
    $username = $_POST['usrname'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,"SELECT * FROM USER WHERE username='$username'");
    $count = mysqli_num_rows($query);
    $fetched = mysqli_fetch_array($query);

    if($count == 0){
        echo "<script>
                alert('Invalid Username');
                window.location.href='login.php';
              </script>";
    } else {
        if($fetched['username'] == $username && $fetched['password'] == $password){
            $_SESSION['usrname'] = $username;
            header('location:home.php');
        } else {
            echo "<script>
                    alert('Invalid username or password');
                    window.location.href='login.php';
                  </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
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
            width: 300px;
            box-sizing: border-box;
        }
        fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }
        legend {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 10px;
            text-align: center;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 1em;
        }
        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }
        .butt {
            background-color: orange;
            color: black;
        }
        .butt:hover {
            background-color: darkorange;
        }
        .butt1 {
            background-color: grey;
            color: black;
            margin-top: 10px;
        }
        .butt1:hover {
            background-color: darkgrey;
        }
        .butt1 a {
            color: black;
            text-decoration: none;
            display: block;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend><b>LOGIN HERE</b></legend>
            <label for="usrname">Username:</label>
            <input type="text" id="usrname" name="usrname" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <button class="butt" type="submit" name="login">LOGIN</button>
            <button class="butt1" type="button" onclick="window.location.href='index.php'">Back</button>
        </fieldset>
    </form>
</body>
</html>