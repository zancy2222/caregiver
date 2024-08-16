<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Caregiver</title>
  <link rel="stylesheet" href="styles.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
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
            <a href="About.php">About</a>

            <button class="lg_btn" id="registerButton">Register</button>

          </div>
      </div>
    </div>
  </header>

  <section class="about_section">
  <div class="container">
    <div class="about_content">
      <h2>About Our Caregiver Services</h2>
      <p><span class="brand_name">We understand</span> the challenges and rewards of caregiving. Our mission is to provide comprehensive support and resources to caregivers, empowering them to navigate their caregiving journey with confidence and compassion.</p>
      <p>Whether you're caring for an aging parent, a child with special needs, or a loved one with a chronic illness, we're here to help. Our dedicated team offers personalized assistance, educational materials, and a supportive community to ensure that caregivers receive the support they need.</p>
      <p>From informational resources to hands-on training sessions, we strive to equip caregivers with the knowledge and skills necessary to provide the best possible care for their loved ones. Our services encompass a wide range of topics, including health and wellness, emotional support, financial planning, and more.</p>
      <p>Join us in our mission to make caregiving a more manageable and fulfilling experience. Together, we can create a supportive environment where caregivers feel valued, empowered, and appreciated.</p>
    </div>
  </div>
</section>


<script>
  // Get the button element by its class name
  const registerButton = document.querySelector('.lg_btn');

  // Add click event listener to the button
  registerButton.addEventListener('click', function() {
    // Redirect to the specified URL
    window.location.href = 'caregiver.php';
  });
</script>

</body>
</html>
</body>
</html>
</span>