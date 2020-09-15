<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing</title>
</head>
<body>
    <h1>Processing</h1>
    <?php
        
        if (isset($_POST["Username"]) && isset($_POST["Password"])){

            
            echo "Sign up successful.";
            echo "Username from registration: " . $_POST["Username"];
            echo "<br>";
            echo "Password from registration: " . $_POST["Password"];
            
            
        }

        else { 
            echo "Form was not submitted properly.";
            echo "Username from registration: " . $_POST["Username"];
            echo "<br>";
            echo "Password from registration: " . $_POST["Password"];
        }
    ?>

    
</body>
</html>