<?php
include('connnect1.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Update</title>
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
            width: 400px;
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
            margin-bottom: 20px;
            text-align: center;
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
        .btn {
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
        .btn:hover {
            background-color: darkgreen;
        }
    </style>
</head>
<body>

<?php
if(isset($_POST['update'])) {
    $names = $_POST['names'];
    $regno = $_POST['regno'];
    $dept = $_POST['dept'];
    $students_ID = $_GET['student_ID'];

    $query = mysqli_query($conn, "UPDATE `students` SET `student_name`='$names', `student_regno`='$regno', `department`='$dept' WHERE student_ID='$students_ID'");

    if($query) {
        echo "Data updated successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<form action="" method="POST">
    <fieldset>
        <legend><b>STUDENT UPDATE FORM</b></legend>

        <label for="names"><b>Student names:</b></label>
        <input type="text" id="names" name="names" required>

        <label for="regno"><b>Registration number:</b></label>
        <input type="text" id="regno" name="regno" required>

        <label for="dept"><b>Department:</b></label>
        <input type="text" id="dept" name="dept" required>

        <button class="btn" type="submit" name="update">Update</button>
    </fieldset>
</form>

</body>
</html>