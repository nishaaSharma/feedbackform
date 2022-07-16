<?php include("form.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="mystyle.css">
    <title>form</title>
</head>
<body>
    <div class="main-container">
        
    <div class="image-container">
        <img src="mrlogo.jpg" height="150px" width="500px">
    </div>

    <div class="form-container">
            
        <form method="post" action="form.php">

            <div class="item-container">
                <input type="text" name="name" placeholder="Enter name" required>
            </div>
            
            <div class="item-container">
                <input type="text" name="email" placeholder="Enter email" required>
            </div>
            
            <div class="item-container">
                <input type="text" name="department" placeholder="Enter department" required>
            </div>
            
            <div class="item-container">
                <input type="text" name="feedback" placeholder="Enter feedback" required>
            </div>

            <div class="item-container">
                <button type="submit">SUBMIT FORM</button>
            </div>

        </form>

        </div>
    
    </div>
</body>
</html>