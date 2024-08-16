<?php
// Include database connection
include 'dbConn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO caregivers (name, patient_name, phone_number, address, email, card_code) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $patient_name, $phone_number, $address, $email, $card_code);

    // Set parameters
    $name = $_POST['name'];
    $patient_name = $_POST['patientname'];
    $phone_number = $_POST['phonenumber'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $card_code = $_POST['cardcode'];

    // Execute SQL
    if ($stmt->execute() === TRUE) {
        // Get the ID of the inserted caregiver
        $caregiver_id = $conn->insert_id;

        // Close the statement
        $stmt->close();
        
        // Redirect to the schedule form with caregiver ID as a parameter
        header("Location: schedule.php?caregiver_id=$caregiver_id");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
