<style>
/* General styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #4CAF50; /* Green color */
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table th,
table td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: left;
}

/* Caregiver information */
.caregiver-info {
    background-color: #dff0d8; /* Greenish background */
    border: 1px solid #d6e9c6;
    border-radius: 5px;
    padding: 15px;
    margin-bottom: 20px;
}

.caregiver-info h2 {
    margin-top: 0;
}

/* Schedule information */
.schedule-info {
    background-color: #d9edf7; /* Blueish background */
    border: 1px solid #bce8f1;
    border-radius: 5px;
    padding: 15px;
    margin-bottom: 20px;
}

.schedule-info h2 {
    margin-top: 0;
}

/* Thank you message */
.thank-you-message {
    background-color: #d0e9c6; /* Light green background */
    border: 1px solid #b6d7a8;
    border-radius: 5px;
    padding: 20px;
    text-align: center;
    font-size: 18px;
    color: #4CAF50; /* Green color */
}

.btn-back-home {
    display: inline-block;
    background-color: #4CAF50; /* Green color */
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 10px;
}

.btn-back-home:hover {
    background-color: #45a049; /* Darker green on hover */
}

</style>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbConn.php';

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO schedules (caregiver_id, days, hours, start_datetime, end_datetime) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("iiiss", $caregiver_id, $days, $hours, $start_datetime, $end_datetime);

    // Set parameters
    $caregiver_id = $_POST['caregiver_id']; // Get caregiver ID from the form
    $days = $_POST['days'];
    $hours = $_POST['hours'];
    $start_datetime = $_POST['start_datetime'];
    $end_datetime = $_POST['end_datetime'];

    // Execute SQL
    if ($stmt->execute() === TRUE) {
        // Retrieve caregiver information
        $caregiver_sql = "SELECT * FROM caregivers WHERE id = $caregiver_id";
        $caregiver_result = $conn->query($caregiver_sql);
        if ($caregiver_result->num_rows > 0) {
            $caregiver_row = $caregiver_result->fetch_assoc();
// Display caregiver information
echo "<div class='caregiver-info'>";
echo "<h2>Caregiver Information</h2>";
echo "<table>";
echo "<tr><th>Field</th><th>Value</th></tr>";
echo "<tr><td>Name</td><td>" . $caregiver_row['name'] . "</td></tr>";
echo "<tr><td>Patient Name</td><td>" . $caregiver_row['patient_name'] . "</td></tr>";
echo "<tr><td>Phone Number</td><td>" . $caregiver_row['phone_number'] . "</td></tr>";
echo "<tr><td>Address</td><td>" . $caregiver_row['address'] . "</td></tr>";
echo "<tr><td>Email</td><td>" . $caregiver_row['email'] . "</td></tr>";
echo "</table>";
echo "</div>";

// Display schedule information
echo "<div class='schedule-info'>";
echo "<h2>Schedule Information</h2>";
echo "<table>";
echo "<tr><th>Field</th><th>Value</th></tr>";
echo "<tr><td>Days</td><td>$days</td></tr>";
echo "<tr><td>Hours</td><td>$hours</td></tr>";
echo "<tr><td>Start Date & Time</td><td>$start_datetime</td></tr>";
echo "<tr><td>End Date & Time</td><td>$end_datetime</td></tr>";
echo "</table>";
echo "</div>";

// Thank you message with CSS styling
echo "<div class='thank-you-message'>";
echo "<p>Thank you for working with us!</p>";
// Add a button to go back to the home page
echo "<a href='index.php' class='btn-back-home'>Back to Home Page</a>";
echo "</div>";


        } else {
            echo "Error: Caregiver with ID $caregiver_id not found.";
        }
    } else {
        echo "Error: " . $conn->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
