<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Caregiver</title>
  <link rel="stylesheet" href="styles.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
   .about_section {
  background-color: #f9f9f9;
  padding: 50px 0;
}

.container {
  max-width: 960px;
  margin: 0 auto;
  padding: 0 15px;
}

.about_content {
  text-align: center;
}

.about_content h2 {
  font-size: 2.5rem;
  margin-bottom: 30px;
  color: #333;
}

.about_content p {
  font-size: 1.1rem;
  line-height: 1.6;
  color: #666;
}

.brand_name {
  font-weight: bold;
  color: #007bff; /* or your brand color */
}

.form_section {
  padding: 2rem;
  background-image: url('aa.jpg'); /* Replace 'img.jpg.jpg' with the URL of your desired background image */
  background-size: cover;
  background-position: center;
  color: white; /* Set font color to white */
  
}

.form_section .container {
  width: 100%;
  max-width: 1100px;
  margin: auto;
  
}

.wrapper {
  width: 500px;
  
  background: transparent;
  border: 2px solid rgba(255, 255, 255, .2);
  backdrop-filter: blur(20px);
  box-shadow: 0 0 10px rgba(0, 0, 0, .2);
  color: #fff;
  border-radius: 10px;
  padding: 30px 40px;

}

.wrapper h1 {
  font-size: 36px;
  text-align: center;
}

.wrapper .input-box {
  position: relative;
  width: 100%;
  height: 50px;
  margin: 30px 0;
}


.input-box {
  position: relative;
  margin-bottom: 30px;
  border: 2px solid rgba(255, 255, 255, 0.5); /* Add border with white color and transparency */
  backdrop-filter: blur(10px); /* Apply blurry effect to the border */
  padding: 5px; /* Add padding to create space between the input and the border */
  border-radius: 10px;
}

.input-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: white; /* Set input text color to white */
  margin-bottom: 10px;
  border: none;
  outline: none;
  background: transparent;
}

.input-box input:focus {
  border-color: rgb(51, 153, 51);
}

.input-box input::placeholder {
  color: white; /* Set placeholder text color to white */
}

.input-box i {
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 20px;
}

.remember-forgot {
  margin-bottom: 30px;
}

.remember-forgot label {
  font-size: 14px;
  color: white; /* Set label color to white */
}

.remember-forgot input {
  margin-right: 10px;
}

.btn {
  width: 100%;
  background: rgb(51, 153, 51);
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
  background: #333;
}



/* Media Queries for responsiveness */
@media screen and (max-width: 768px) {
  .container {
    padding: 0 20px; /* Adjust padding for smaller screens */
  }

  .nav_bar {
    flex-direction: column; /* Stack navigation items vertically */
    text-align: center;
  }

  .logo {
    margin-bottom: 20px;
  }

  .menu_list a {
    margin: 0.5rem;
    font-size: 1rem;
  }

  .lg_btn {
    margin: 1rem 0;
  }

  .home h1 {
    font-size: 3rem;
  }

  .home_buttons button {
    padding: 8px 0.8rem;
    margin: 0.5rem;
  }

  .box {
    width: calc(100% - 40px); /* Adjust width for smaller screens */
    margin: 1rem auto;
  }
}

</style>
</head>
<body>
  <div class="form_section" id="formSection">
    <div class="container">
      <div class="wrapper">
        <form action="Save_Caregiver.php" method="post" enctype="multipart/form-data">
          <h1>Caregiver Availability</h1>
          <br>
          <div class="input-box">
            <input type="text" name="name" for="name" placeholder="Name*" required> 
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
            <input type="file" name="cv" for="cv" accept=".pdf,.doc,.docx" required>
            <i class='bx bxs-file'></i>
          </div>
          <div class="input-box">
            <input type="email" name="email" for="email" placeholder="Email*" required>
            <i class='bx bx-envelope'></i>
          </div>
            <br>
          <div class="remember-forgot">
            <label><input type="checkbox" required>I CONFIRM THE DETAILS ARE CORRECT</label>
          </div>
          <button type="submit" name="create" value="Sign Up" class="btn">Schedule</button>        
        </form>
      </div>
    </div>
  </div>

  
  <section class="home_section">
    <div class="overlay">
      <div class="container">
        <div class="home">
        <h1><span>support</span> caregivers <br>explore <span>resources</span> <br><span>cherish</span> moments</h1>

        </div>
      </div>
    </div>
  </section>

</body>
</html>
