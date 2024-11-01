<?php
include_once('config.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $temp_password = $_POST['password'];
    $password = password_hash($temp_password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, surname, age, sex, email, username, password) VALUES (:name, :surname, :age, :sex, :email, :username, :password)";
    $prep = $con->prepare($sql);
    $prep->bindParam(':name', $name);
    $prep->bindParam(':surname', $surname);
    $prep->bindParam(':age', $age);
    $prep->bindParam(':sex', $sex);
    $prep->bindParam(':email', $email);
    $prep->bindParam(':username', $username);
    $prep->bindParam(':password', $password);
    $prep->execute();


 echo "Registration successful!";
    

    header("Location: login.php");
}

?>
