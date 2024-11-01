<?php 	
    $host = 'localhost';
    $db = 'ehealth_care';
    $user = 'root';
    $password = '';

    try {
        $con = new PDO("mysql:host=$host; dbname=$db", $user, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo "Something went wrong: " . $e->getMessage();
    }
?>
