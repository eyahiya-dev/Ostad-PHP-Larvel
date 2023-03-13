<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 06</title>
</head>
<body>
    <center>
        <form action="action6.php" method="POST" enctype="multipart/form-data">
            <div class="group_input">
                <input type="text" placeholder="Enter Your Name" name="name">
            </div>
            <?php
                if(isset($_SESSION['nameError'])){
                    echo "Name is Requried";
                }
            ?>
            <div class="group_input">
                <input type="email" placeholder="Enter Your Email" name="email">
            </div>
            <div class="group_input">
                <input type="password" placeholder="Enter Your Password" name="password">
            </div>
            <div class="group_file">
                <input type="file" name="img">
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </center>    
    
</body>
</html>
