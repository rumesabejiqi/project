<?php
include_once('config.php');
session_start();

if (isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['name'] . "!";
    echo '<form action="logout.php" method="post">
            <input type="submit" value="Logout">
          </form>';
} else {
    header("Location: login.php");
    exit();
}

// Assuming you have a unique identifier for the logged-in user, such as username
$loggedInUser = $_SESSION['username'];




// SQL query to retrieve data for the logged-in user
$sql = "SELECT * FROM users WHERE username = '$loggedInUser'";
$result = $mysqli->query($sql);
?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">User Information</h1>
                <ul class="list-group col-lg-10 fs-4">
                    <?php
                    if ($result->num_rows > 0) {
                        // Output data of the logged-in user
                        while ($row = $result->fetch_assoc()) {
                            echo '<li class="list-group-item">';
                            echo '<strong>Name:</strong> ' . $row["name"] . '<br>';
                            echo '<strong>Email:</strong> ' . $row["email"] . '<br>';
                            echo '<strong>Age:</strong> ' . $row["age"];
                            echo '</li>';
                        }
                    } else {
                        echo "No user information found for the logged-in user.";
                    }

                    // Close the database connection
                    $mysqli->close();
                    ?>
                </ul>
            </div>
            <!-- ... (rest of your HTML code) ... -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
