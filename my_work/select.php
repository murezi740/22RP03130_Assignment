<?php
include('connnect1.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
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
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        table th, table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #f2f2f2;
            color: #333;
        }
        table tr:hover {
            background-color: #f5f5f5;
        }
        table td a {
            color: white;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        table td a.update {
            background-color: green;
        }
        table td a.update:hover {
            background-color: darkgreen;
        }
        table td a.delete {
            background-color: red;
        }
        table td a.delete:hover {
            background-color: darkred;
        }
        .button-view {
            display: block;
            width: 100px;
            padding: 10px;
            margin: 20px auto;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .button-view:hover {
            background-color: darkblue;
        }
        center {
            width: 100%;
        }
    </style>
</head>
<body>

<form action="" method="POST">
    <center>
        <table border="1">
            <tr>
                <th>Names</th>
                <th>Regno</th>
                <th>Department</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
            if(isset($_POST['view'])){
                $query = mysqli_query($conn, "SELECT * FROM students");
                while($fetch = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $fetch['student_name']; ?></td>
                <td><?php echo $fetch['student_regno']; ?></td>
                <td><?php echo $fetch['department']; ?></td>
                <td><a href="update.php?student_ID=<?php echo $fetch['student_ID']; ?>" class="update">UPDATE</a></td>
                <td><a href="delete.php?student_ID=<?php echo $fetch['student_ID']; ?>" class="delete">DELETE</a></td>
            </tr>
            <?php
                }
            }
            ?>
        </table>
        <button class="button-view" type="submit" name="view">VIEW</button>
    </center> 
</form>
</body>
</html>