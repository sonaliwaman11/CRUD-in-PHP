<?php
    include "connection.php";
    if(isset($_GET['userSno'])){
        $userSno=$_GET['userSno'];
        if(isset($_POST['submit'])){
            // Get form data
            $userName = $_POST['userName'];
            $activeStatus = $_POST['activeStatus'];
    
            // update data into the database
            $sql = "UPDATE `user` SET `UserName`='$userName', `Active`='$activeStatus' WHERE `UserSno`='$userSno' ";
    
            if ($conn->query($sql) === TRUE) {
                header('location:/crud/index.php');
            } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    
            // Close the database connection
            $conn->close();
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
    <!--adding bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"></link>
   
</head>
<body>
    <div class="container">
        <h2>User Information Form</h2>
        <form method="post">
            <div class="form-group">
                <label for="userName">User Name:</label>
                <input type="text" id="userName" name="userName" required>
            </div>
            <div class="form-group">
                <label for="activeStatus">Active Status:</label>
                <select id="activeStatus" name="activeStatus" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            
            <div class="form-group">
                <button class="btn btn-success" type="submit" name="submit">Update</button>
                <a class='btn btn-danger' type="submit" name="cancel" href="index.php">Cancel</a>
            </div>
            

            
        </form>
    </div>
</body>
</html>
