
<?php
    //Create constants to store non Repeating  values
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'nirusql');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-order');

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); // Database connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); // Selecting Database

?>