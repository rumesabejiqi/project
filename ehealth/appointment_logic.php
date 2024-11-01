<?php
include_once('config.php');
session_start(); 

if (isset($_POST['submit'])) {
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];

        $sqlUserData = "SELECT id FROM users WHERE username = :username";
        $prepUserData = $con->prepare($sqlUserData);
        $prepUserData->bindParam(':username', $username);
        $prepUserData->execute();
        $userData = $prepUserData->fetch();

        $userId = $userData['id'];
        $doctorId = $_POST['doctor'];

        $appointmentDate = $_POST['date'];
        $appointmentTime = $_POST['time']; 

        $sqlInsertAppointment = "INSERT INTO appointments (user_id, doctor_id, appointment_date, appointment_time) VALUES (:userId, :doctorId, :appointmentDate, :appointmentTime)";
        $prepInsertAppointment = $con->prepare($sqlInsertAppointment);
        $prepInsertAppointment->bindParam(':userId', $userId);
        $prepInsertAppointment->bindParam(':doctorId', $doctorId);
        $prepInsertAppointment->bindParam(':appointmentDate', $appointmentDate);
        $prepInsertAppointment->bindParam(':appointmentTime', $appointmentTime);
        $prepInsertAppointment->execute();
    } else {
        header("Location: login.php");
        exit();
    }
}
?>
