<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caregiver Availability</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<div class="wrapper">
    <form action="save.php" method="post">

        <h1>Caregiver Availability</h1>
        <p> </p> 
        <div class="input-box">
            <input type="text" name="name" for="name" placeholder="Name*" required> 
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="text" name="patientname" for="patientname" placeholder="Patient Name" required>
            <i class='bx bxs-user'></i>
        </div> 
        <div class="input-box">
            <input type="text" name="phonenumber" for="phonenumber" placeholder="Phone Number*" required>
            <i class='bx bx-phone'></i>
        </div>
        <div class="input-box">
            <input type="text" name="address" for="address" placeholder="Address" required>
            <i class='bx bx-map'></i>
        </div>
        <div class="input-box">
            <input type="email" name="email" for="email" placeholder="Email*" required>
            <i class='bx bx-envelope'></i>
        </div>
        <div class="input-box">
            <input type="password" name="cardcode" for="cardcode" placeholder="Card Code*" required>
            <i class='bx bx-dialpad-alt'></i>
        </div>
        
        <div class="remember-forgot">
            <label><input type="checkbox" required>I CONFIRM THE DETAILS ARE CORRECT</label>
        </div>
        <button type="submit" name="create" value="Sign Up" class="btn">Schedule</button>        
    </form>
</div>

</body>
</html>
