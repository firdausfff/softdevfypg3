<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $adminID = $_POST['admin_ID'];
    $password = $_POST['password'];


    include_once 'dbh.inc.php';

    //get user with email
    $stmt = $pdo->prepare('SELECT *FROM admin_acc WHERE admin_ID = :admin_ID');

    try{
        $stmt->execute(['admin_ID'=>$adminID]);

        if($stmt->rowCount() > 0){

        }else{
            $_SESSION['admin_ID'] = $adminID;
            $_SESSION['password'] =$password;

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

header("Location: ../dashMain.html");

?>