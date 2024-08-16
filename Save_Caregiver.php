
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
/* Caregiver information */
.container-info {
    background-color: #dff0d8; /* Greenish background */
    border: 1px solid #d6e9c6;
    border-radius: 5px;
    padding: 15px;
    margin-bottom: 20px;
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
</head>
<body>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include "dbConn.php";

    // Initialize variables
    $name = $_POST["name"];
    $phone_number = $_POST["phonenumber"];
    $address = $_POST["address"];
    $cv_filename = $_FILES["cv"]["name"];
    $cv_tmp_name = $_FILES["cv"]["tmp_name"];
    $cv_path = "uploads/" . $cv_filename; // Path to store the file
    $email = $_POST["email"];
    $confirmed = isset($_POST["confirmed"]) ? 1 : 0;

    // Validate input
    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($phone_number)) {
        $errors[] = "Phone number is required.";
    }
    // Add more validation as needed

    // If no errors, upload file and insert data into database
    if (empty($errors)) {
        // Upload CV file
        if (move_uploaded_file($cv_tmp_name, $cv_path)) {
            // Insert data into database
            $sql = "INSERT INTO addcaregivers (name, phone_number, address, cv_path, email, confirmed)
                    VALUES ('$name', '$phone_number', '$address', '$cv_path', '$email', $confirmed)";
            if (mysqli_query($conn, $sql)) {
                // Retrieve caregiver information
                $caregiver_sql = "SELECT * FROM addcaregivers WHERE id = LAST_INSERT_ID()";
                $caregiver_result = mysqli_query($conn, $caregiver_sql);
                if ($caregiver_result && mysqli_num_rows($caregiver_result) > 0) {
                    $caregiver_row = mysqli_fetch_assoc($caregiver_result);
                    // Display caregiver information
                    echo "<div class='container-info'>";
                    echo "<h2>Caregiver Information</h2>";
                    echo "<table>";
                    echo "<tr><th>Field</th><th>Value</th></tr>";
                    echo "<tr><td>Name</td><td>" . $caregiver_row['name'] . "</td></tr>";
                    echo "<tr><td>Phone Number</td><td>" . $caregiver_row['phone_number'] . "</td></tr>";
                    echo "<tr><td>Address</td><td>" . $caregiver_row['address'] . "</td></tr>";
                    echo "<tr><td>CV</td><td>" . $cv_filename . "</td></tr>"; // Display CV file name
                    echo "<tr><td>Email</td><td>" . $caregiver_row['email'] . "</td></tr>";
                    echo "</table>";
                    echo "</div>";
                } else {
                    echo "Error: Unable to retrieve caregiver information.";
                }
                // Thank you message with CSS styling
                echo "<div class='thank-you-message'>";
                echo "<p>Thank you for adding a caregiver!</p>";
                // Add a button to go back to the home page
                echo "<a href='index.php' class='btn-back-home'>Back to Home Page</a>";
                echo "</div>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Error uploading file.";
        }
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }

    // Close database connection
    mysqli_close($conn);
}
?>
