</html>

<?php
    include_once 'includes2/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Main Page</title>
</head>
<body>

<?php
    $sql ="SELECT * FROM customer_acc WHERE email= 'email@example.com';";

    $result = mysqli_query($conn, $sql);

    $resultCheck = mysqli_num_rows( $result);

    if ($resultCheck >0) {
while ($row = mysqli_fetch_assoc($result)){
    echo $row['name'] . "<br>";
    
        }
    }
?>
</body>

</html>

