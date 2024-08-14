<?php
include("db.php"); // Ensure this file contains the correct database connection setup

// Inserting into form
if (isset($_POST['submit'])) 
{
    
    $id = $_POST['id'];
    $stname = $_POST['stname'];
    $staddresss = $_POST['staddresss'];
    $stphone = $_POST['stphone'];
   
    $query = "INSERT INTO studentrecord (id, stname, staddresss, stphone) VALUES ('$id', '$stname', '$staddresss', '$stphone')";
    $data = mysqli_query($db, $query);
   // print_r($_POST);exit;
    if ($data) {
        echo "Inserted successfully";
    } else {
        echo "Error: " . mysqli_error($db); // Added mysqli_error for debugging
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: whitesmoke;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            height: 100vh;
        }
        .container {
            background-color: grey;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="#" method="post">
            <h2>Register here</h2>
            <div class="form">
                <div>
                    <label for="id">ID</label>
                    <input type="text" name="id" id="id" required>
                </div>
                <div>
                    <label for="stname">Name</label>
                    <input type="text" name="stname" id="stname" required>
                </div>
                <div>
                    <label for="staddresss">Address</label>
                    <textarea name="staddresss" id="staddresss" required></textarea>
                </div>
                <div>
                    <label for="stphone">Phone</label>
                    <input type="text" name="stphone" id="stphone" required>
                </div>
                <input type="submit" value="Submit" name="submit">
            </div>
        </form>
    </div>
</body>
</html>

