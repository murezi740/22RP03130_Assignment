<?php
include("connnect1.php");
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
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 300px;
        }
        fieldset {
            border: none;
        }
        legend {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .butt {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }
        .butt:hover {
            background-color: darkgreen;
        }
        .butt span {
            color: white;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend><b>USER REGISTRATION FORM</b></legend>
            <label for="usrname">Username:</label>
            <input type="text" id="usrname" name="usrname" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <button class="butt" type="submit" name="submit"><span>SEND</span></button>
        </fieldset>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $usrname = $_POST['usrname'];
        $password = $_POST['password'];
        $query = mysqli_query($conn, "INSERT INTO user VALUES (NULL, '$usrname', '$password')");
        if ($query) {
            echo "<script>
                    alert('Well inserted');
                    window.location.href='login.php';
                  </script>";
        } else {
            echo "Failed to register";
        }
    }
    ?>
</body>
</html>