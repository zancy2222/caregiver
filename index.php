<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
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
</style>
</head>
<body>
  <header>
    <div class="container">
      <div class="nav_bar">
        <div class="logo">
        <i class="fa-solid fa-suitcase-medical"></i>
          <h4>Caregiver</h4>
        </div>

          <div class="menu_list">
            <a href="index.php">Home</a>
            <a href="#" id="aboutLink">About</a>

            <button class="lg_btn" id="registerButton">Request a Caregiver</button>
            <button class="lg_btn" id="ApplyButton">Apply as a Caregiver</button>

          </div>
      </div>
    </div>
  </header>

   <!-- Form Section -->
 <section class="form_section" id="formSection">
    <div class="container">
      <div class="wrapper">
        <form action="save.php" method="post">
          <h1>Caregiver Availability</h1>
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
    </div>
  </section>



  <section class="services" id="servicesSection">
    <div class="container">
    <div class="title">
    <h1>Discover the Best <span>caregiving</span> <br>Resources</h1>
    <span class="slogan">Empowering caregivers every step of the way.</span>
</div>

<div class="services_boxes">
  <div class="box">
  <i class="fa-solid fa-stethoscope"></i>
    <h4>Support Group Meetings</h4>
    <p>Join our supportive community for caregivers. Share experiences and gain valuable insights.</p>
  </div>

  <div class="box br">
    <i class="fa-solid fa-book-medical"></i>
    <h4>Health and Wellness Resources</h4>
    <p>Access resources and tips for maintaining your well-being as a caregiver.</p>
  </div>

  <div class="box">
    <i class="fa-solid fa-comments"></i>
    <h4>Caregiver Coaching Sessions</h4>
    <p>Receive personalized guidance and support from experienced caregivers.</p>
  </div>
</div>

  </div>
  <div class="container">
    <div class="about_content">
      <h2>About Our Caregiver Services</h2>
      <p><span class="brand_name">We understand</span> the challenges and rewards of caregiving. Our mission is to provide comprehensive support and resources to caregivers, empowering them to navigate their caregiving journey with confidence and compassion.</p>
      <p>Whether you're caring for an aging parent, a child with special needs, or a loved one with a chronic illness, we're here to help. Our dedicated team offers personalized assistance, educational materials, and a supportive community to ensure that caregivers receive the support they need.</p>
      <p>From informational resources to hands-on training sessions, we strive to equip caregivers with the knowledge and skills necessary to provide the best possible care for their loved ones. Our services encompass a wide range of topics, including health and wellness, emotional support, financial planning, and more.</p>
     
    </div>
  </div>
  </section>


  <section class="home_section">
    <div class="overlay">
      <div class="container">
        <div class="home">
        <h1><span>support</span> caregivers <br>explore <span>resources</span> <br><span>cherish</span> moments</h1>

        </div>
      </div>
    </div>
  </section>

  



  <script>
    // Get the button element
    var applyButton = document.getElementById("ApplyButton");

    // Add click event listener
    applyButton.addEventListener("click", function() {
        // Redirect to applyC.php
        window.location.href = "applyC.php";
    });
</script>


  <script>
  // JavaScript to scroll to the form section when the button is clicked
  document.getElementById("registerButton").addEventListener("click", function() {
    document.getElementById("formSection").scrollIntoView({ behavior: 'smooth' });
  });

  document.getElementById("aboutLink").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default behavior of the link
    document.getElementById("servicesSection").scrollIntoView({ behavior: 'smooth' });
  });
</script>

</body>
</html>
</body>
</html>
</span>