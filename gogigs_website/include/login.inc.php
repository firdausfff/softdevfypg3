<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $host = "localhost";
    $dbname = "gogigs";
    $username = "root";
    $password = "";

    $mysqli = new mysqli(hostname: $host,
                         username: $username,
                         password: $password,
                         database: $dbname);

    if ($mysqli->connect_error) {
        die ("Connection error" . $mysqli->connect_error);
    }

    $query = "SELECT email, password FROM customer_acc WHERE email='$email' AND password='$pwd'";

    $result = $mysqli->query($query);

    if($result->num_rows == 1){
        $result = null;
        $nameget = "SELECT name FROM customer_acc WHERE email ='$email' AND password='$pwd'";
        $result = $mysqli->query($nameget);
        while($row = $result->fetch_assoc()) {
            $namereceive = $row["name"];    
        }

        //login success
        session_start();
        $_SESSION['name'] = $namereceive;
        $_SESSION['login_yes'] = 1;

        header("Location: /gogigs/gogigs_website/php_files/custMain.php"); 
        die();
    } else {
        //login failed
        echo "<script>
                alert('Login failed. Please check your email and password.');
                window.location.href = '/gogigs/gogigs_website/html/account.html';
              </script>";
        die();
    }

    $mysqli->close();
}
?>
<script>
    document.getElementById('popup').addEventListener('click', function() {
    alert('Confirmation email has been resent. Please check your inbox.');
    });
</script>
