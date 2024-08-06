<?php
include('connnect1.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Delete</title>
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
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"] {
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
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

<form action="" method="POST">
    <label for="student_ID"><b>ID:</b></label>
    <input type="text" id="student_ID" name="student_ID" required><br>
    <button type="submit" name="delete">DELETE</button>
</form>

<?php
if (isset($_POST['delete'])) {
    $id = $_POST['student_ID'];

    $query = mysqli_query($conn, "DELETE FROM students WHERE student_ID='$id'");

    if ($query) {
        echo "<script>
                alert('Record deleted successfully');
                window.location.href='select.php';
              </script>";
    } else {
        echo "<script>
                alert('Failed to delete');
                window.location.href='delete.php';
              </script>";
    }
}
?>
    
</body>
</html>