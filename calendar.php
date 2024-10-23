<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Calendar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
            text-align: center;
        }

        .appointment-list {
            list-style-type: none;
            padding: 0;
        }

        .appointment-item {
            border: 1px solid #ccc;
            margin: 10px;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Your Appointments</h2>
    <ul class="appointment-list">
        <?php
        // Assume $appointments is an array with appointment data
        $appointments = [
            ['date' => '2023-01-01', 'time' => '10:00 AM'],
            ['date' => '2023-01-15', 'time' => '02:30 PM'],
            // Add more appointments as needed
        ];

        foreach ($appointments as $appointment) {
            echo '<li class="appointment-item">';
            echo '<strong>Date:</strong> ' . $appointment['date'] . '<br>';
            echo '<strong>Time:</strong> ' . $appointment['time'];
            echo '</li>';
        }
        ?>
    </ul>
</div>

</body>
</html>

