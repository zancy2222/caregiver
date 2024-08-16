<?php
// Retrieve caregiver ID from URL parameter
if (isset($_GET['caregiver_id'])) {
    $caregiver_id = $_GET['caregiver_id'];
} else {
    // Handle error if caregiver ID is not provided
    echo "Error: Caregiver ID is missing.";
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('aa.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper {
            width: 90%; /* Adjust width for responsiveness */
            max-width: 500px;
            background: transparent;
  border: 2px solid rgba(255, 255, 255, .2);
  backdrop-filter: blur(20px);
  box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            padding: 20px;
            border-radius: 10px;
            margin-right: auto; /* Align to the left side */
    margin-left: 10%; /* Add margin to adjust alignment */
        }

        h2 {
            margin-top: 20px;
            color: #333;
            font-size: 18px; /* Adjust font size for smaller screens */
        }

        .radio {
            text-align: center; /* Center the radio buttons */
            margin-bottom: 20px; /* Add spacing between radio buttons */
        }

        .radio input[type="radio"] {
            display: none;
        }

        .radio label {
            display: inline-block;
            background-color: #f1f1f1;
            padding: 10px 20px; /* Adjust padding */
            border-radius: 20px; /* Increase border-radius for rounded corners */
            margin: 5px; /* Add spacing between radio buttons */
            cursor: pointer;
            transition: background-color 0.3s ease; /* Add transition for hover effect */
        }

        .radio label:hover {
            background-color: #e0e0e0; /* Change background color on hover */
        }

        .radio input[type="radio"]:checked + label {
            background-color: #51a351;
            color: #fff;
        }

        .input-box input[type="datetime-local"] {
            width: calc(100% - 42px); /* Adjust width to fit smaller screens */
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 14px; /* Adjust font size for smaller screens */
        }

        .remember-forgot {
            margin-bottom: 20px;
            font-size: 14px; /* Adjust font size for smaller screens */
        }

        .remember-forgot label {
            color: #333;
        }

        .btn {
            width: 92%;
            background: #51a351;
            color: #fff;
            padding: 10px;
            border: none;
            outline: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #478847;
        }

        @media screen and (max-width: 768px) {
  .wrapper {
    width: 65%; /* Adjust width for smaller screens */

    margin: 0 auto; /* Center the wrapper horizontally */
  }
  
  h2 {
    font-size: 16px; /* Adjust font size for smaller screens */
  }
  
  .radio label {
    padding: 8px 16px; /* Adjust padding for smaller screens */
  }
  
  .input-box input[type="datetime-local"] {
    font-size: 12px; /* Adjust font size for smaller screens */
  }
  
  .remember-forgot {
    font-size: 12px; /* Adjust font size for smaller screens */
  }
  
  .btn {
    font-size: 14px; /* Adjust font size for smaller screens */
  }
}
    </style>
</head>
<body>

<div class="wrapper">
    <form action="save_schedule.php" method="post">
        <input type="hidden" name="caregiver_id" value="<?php echo $caregiver_id; ?>">

        <h2>How many days in a week?</h2>
        
        <div class="radio">       
            <input type="radio" name="days" value="5" id="fivedays">
            <label for="fivedays">FIVE DAYS</label><br>
            <input type="radio" name="days" value="7" id="sevendays">
            <label for="sevendays">SEVEN DAYS</label>
        </div>

        <h2>How many hours in a day?</h2>
        <div class="radio">
            <input type="radio" name="hours" value="4" id="fourhours">
            <label for="fourhours">4 HOURS</label><br>
            <input type="radio" name="hours" value="6" id="sixhours">
            <label for="sixhours">6 HOURS</label><br>
            <input type="radio" name="hours" value="8" id="eighthours">
            <label for="eighthours">8 HOURS</label><br>
            <input type="radio" name="hours" value="12" id="twelvehours">
            <label for="twelvehours">12 HOURS</label><br>
            <input type="radio" name="hours" value="24" id="twentyfourhours">
            <label for="twentyfourhours">24 HOURS</label>
        </div>

        <h2>Starting Date & Time</h2>
        <div class="input-box">
            <input type="datetime-local" name="start_datetime" required>
        </div>

        <h2>Until</h2>
        <div class="input-box">
            <input type="datetime-local" name="end_datetime" required>
        </div>

        <div class="remember-forgot">
            <label><input type="checkbox" required>I CONFIRM THE DETAILS ARE CORRECT</label>
        </div>
       
        <button type="submit" name="create" value="Proceed" class="btn">Proceed</button>
    </form>
</div>

</body>
</html>
