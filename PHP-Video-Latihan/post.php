<form action="nav.php" method="post">
    Email :
    <input type="email" name="email">
    <br>
    <br>
    Password :
    <input type="password" name="password">
    <br>
    <br>
    <input type="submit" name="kirim" value="Login">    
</form>

<?php 

    if (isset($_POST['kirim'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo $email;
        echo '<br>';
        echo $password;    
    }

    
?>