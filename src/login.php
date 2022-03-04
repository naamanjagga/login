<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>login</title>
</head>
<body>
    <form action="post.php" method="post">
        <input type="text" name="username" placeholder="username"><br>
        <input type="password" name="password" placeholder="password"><br>
        <button type="submit" name="login">log in</button>

    </form>
    
</body>
</html>