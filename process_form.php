<?php
// process_form.php
include("config.php");

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    // Prepare and execute SQL query to insert data into tblcontactus
    $sql = "INSERT INTO tblcontactus (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully for Form 1";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


// Close database connection
$conn->close();
?>
