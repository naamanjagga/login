<?php
 session_start();
?>
<?php
 if(isset($_POST['login'])){
     $_SESSION['username'] = $_POST['username'];
    
     $_SESSION['password'] = $_POST['password'];
     
     print_r($_SESSION['username']);
     echo '<br>';
     print_r($_SESSION['password']);
     echo '<br>';
     echo '<a href="login.php" name="logout" >Log Out</a>';

 }
 if(isset($_POST['logout'])){
     echo 'namen';
     session_destroy();
 }
?>