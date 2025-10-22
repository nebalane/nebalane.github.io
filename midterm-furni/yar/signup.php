<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - my website</title> 
</head>
<body>
    <?php require_once 'header.php';?>

        <form method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="email" placeholder="Email"> 
            <input type="password" name="password" placeholder="Password">
            
            <button type="submit">Signup</button>
        </form>
    <?php require 'footer.php';?>
</body>
</html>