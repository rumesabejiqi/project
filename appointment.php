<?php
include_once('config.php');
session_start();

if (isset($_SESSION['username'])) {
    include_once('config.php');

    $username = $_SESSION['username'];
    $sql = "SELECT name, surname, email FROM users WHERE username = :username";
    $prep = $con->prepare($sql);
    $prep->bindParam(':username', $username);
    $prep->execute();
    $userData = $prep->fetch();

    $firstName = $userData['name'];
    $surname = $userData['surname'];
    $email = $userData['email'];


    $fullName = $firstName . ' ' . $surname;


    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Appointment System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Book an Appointment</h2>
                    <form id="appointmentForm" action="appointment_logic.php" method="POST">
                        <div class="form-group">
                            <label for="fullName"></label>
                            <input type="text" class="form-control" id="fullName" value="<?= $fullName ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" value ="<?= $email ?>" required>
                        </div>
                       <div class="form-group">
    <label for="doctor">Select Doctor</label>
    <select class="form-control" id="doctor" name="doctor" required>
        <?php
        $sqlDoctors = "SELECT id, name FROM doctors";
        $resultDoctors = $con->query($sqlDoctors);

        echo '<option value="" disabled selected>Select Doctor</option>';

        while ($row = $resultDoctors->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
        }
        ?>
    </select>
</div>

                        <div class="form-group">
                            <label for="appointmentDate">Appointment Date</label>
                            <input type="date" class="form-control" id="appointmentDate" required name="date">
                        </div>
                        <div class="form-group">
                            <label for="appointmentTime">Appointment Time</label>
                            <input type="time" class="form-control" id="appointmentTime" required name="time">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit Appointment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>

<?php
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit();
}
?>