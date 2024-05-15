<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Define your database connection details here
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "aplusdb";
    // Create a database connection
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = mysqli_real_escape_string($conn, $_POST["USERNAME"]); // Change to USERNAME
    $password = $_POST["PASSWORD"];

    // Use prepared statement to prevent SQL injection
    $sql = "SELECT USERID, PASS FROM tblusers WHERE USERNAME = ?"; // Change to USERNAME
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $username); // Change to username
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            mysqli_stmt_bind_result($stmt, $userID, $hashedPassword);
            mysqli_stmt_fetch($stmt);

            if (password_verify($password, $hashedPassword)) {
                $_SESSION["USERID"] = $userID; // Store user ID or other relevant data in the session
                header("Location: home.php"); // Redirect to the dashboard
                exit();
            } else {
                echo "Invalid password. Please try again.";
            }
        } else {
            echo "User not found. Please check your username or register.";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Prepared statement failed.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
