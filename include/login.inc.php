<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['pwd'];


    include_once 'dbh.inc.php';

    //get user with email
    $stmt = $pdo->prepare('SELECT *FROM customer_acc WHERE email = :email');

    try{
        $stmt->execute(['email'=>$email]);

        if($stmt->rowCount() > 0){

        }else{
            $_SESSION['email'] = $email;
            $_SESSION['pwd'] =$password;

            $_SESSION['error'] = 'No account associated with email';
        }
    }
    catch(PDOException $e){
        die("Query failed: " . $e->getMessage());
    }
}

else {

    $_SESSION['error'] = 'FILL UP LOGIN FORM';
}

header('location: ../custMain.html');

?>