<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Jagadeesh";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO Donar(name, BloodGroup, Age, Gender, City, ContactNumber, MailID) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissss", $name, $blood_group, $age, $gender, $locality, $contact_no, $mail_id);

    // Set parameters
    $name = $_POST["name"];
    $blood_group = $_POST["Blood-Group"];
    $age = $_POST["Age"];
    $gender = $_POST["Gender"];
    $locality = $_POST["Locality"];
    $contact_no = $_POST["Contact-No"];
    $mail_id = $_POST["Mail-id"];

    // Execute the prepared statement
    $stmt->execute();

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
