<?php
session_start();
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale=1.0, user-scalable=0">
  <meta property="og:title" content="Taluka Panchayat - GOVERNMENT OF GUJARAT" />
  <meta property="og:description" content=A Taluka Panchayat is a local government body in India that is responsible for the administration of a taluka, which is a sub-district level administrative unit." />
  <meta property="og:image" content="https://i.ibb.co/FwbCBHF/fotor-2023-1-29-10-51-0.png" />
  <title>Taluka Panchayat - Government Of Gujarat</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/FwbCBHF/fotor-2023-1-29-10-51-0.png">

  <!-- custom css link -->
  <link rel="stylesheet" href="assets/style.css">

  <!-- google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

  <!-- Internal Css For This -->
    <style>
      @media(max-width:500px) {
      iframe{
        width: 100%;
      }
    }

    .error-message {
      color: red;
      font-size: 0.875rem;
      margin-top: 0.25rem;
      display: block;
    }

    </style>
   
</head>
<body>

  <!-- HEADER -->

  <header class="header" data-header>
    <div class="container">

      <a href="index.html" class="logo">
        <img src="https://i.ibb.co/Lhyd2kg/menu-logo.png" alt="Taluka Panchayat logo" width="250px" class="nav-logo"> 
      </a>

      <button class="menu-toggle-btn" data-nav-toggle-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar">
        <ul class="navbar-list">

          <li>
            <a href="index.php" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#hero" class="navbar-link">About</a>
          </li>

          <li>
            <a href="#services" class="navbar-link">Services</a>
          </li>

          <li>
            <a href="#features" class="navbar-link">Notice</a>
          </li>

          <li>
            <a href="#blog" class="navbar-link">Blog</a>
          </li>

          <li>
            <div class="google_translate">
              <a  href="#" class="disclaimer" data-toggle="tooltip" data-placement="top">
                <i class="icon icon-information2"></i>
              </a>
              <div id="google_translate_element"></div>
          </div>
          </li>

        </ul>

      </nav>

    </div>
  </header>

  <!-- Slider Code -->
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="https://cmogujarat.gov.in/wp-content/uploads/2023/01/Botad-dev-works-nth.jpg" style="width:100%">
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="https://cmogujarat.gov.in/wp-content/uploads/2023/01/cultural-event-botad-25jan.jpg" style="width:100%">
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="https://cmogujarat.gov.in/wp-content/uploads/2023/01/republic-day-26jan.jpg" style="width:100%">
    </div>
    
    </div>
    <br>
    
    <div style="text-align:center; display: none;">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>

    <!-- Slider code END -->


  <main>
    <article>

     <!-- HERO -->

      <section class="hero" id="hero">
        <div class="container">
          <div class="hero-content" id="taluka">
            <h1 class="h1" ><b>Taluka Panchayat</b></h1>

            <br>
            A Taluka Panchayat is a local government body in India that is responsible for the administration of a taluka.
            
            <br><br>
            which is a sub-district level administrative unit. The Taluka Panchayat is made up of elected members from each village within the taluka, and is headed by a president (Sarpanch). 

            <br><br>
            The main responsibilities of Taluka Panchayat are the implementation of government schemes and projects related to the rural development, education, health, sanitation, and infrastructure. It also looks after the issues related to the welfare of the rural people and takes necessary steps to resolve them. 

            <br><br>
            They are also responsible for the maintenance of the public buildings and facilities within their jurisdiction, such as schools, hospitals, and community centers.</p>
     
          </div> 

          <!-- Map -->
          <figure class="hero-banner" style="border: 1px solid black; box-shadow: 2px 2px 20px rgba(1, 5, 26, 0.226);">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232951.18238985376!2d72.18149087043906!3d24.17656419062948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395ce967a7fe9c47%3A0xbc6c4987c65ec361!2sPalanpur%2C%20Gujarat%20385001!5e0!3m2!1sen!2sin!4v1674971460860!5m2!1sen!2sin" width="400vh" height="360vh" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="map"></iframe>
        </figure>

        </div>
      </section>

      <!-- ABOUT -->
      <section class="about" id="services">
        <div class="container">

          <div class="about-content">

            <div class="about-icon">
              <ion-icon name="cube"></ion-icon>
            </div>

            <h2 class="h2 about-title">Online Services</h2>

            <p class="about-text">
              Many Taluka Panchayats in India now offer online services to the public, which allows individuals to access certain services and information from the comfort of their own home. 
            </p>

            <a href="Other Pages/Non-Cri-form/index.html">
            <button class="btn btn-outline">View All</button>
            </a>

          </div>
          
          <ul class="about-list">
            <li>
              <div class="about-card">

                <div class="card-icon">
                  <img src="https://www.digitalgujarat.gov.in/images/citizen/Income.png" alt="" width="50%">
                </div>

                <h3 class="h3 card-title">Income Certificate </h3>

                <p class="card-text">
                  An income certificate is a document issued by the government that verifies an individual's income.
                </p>

              </div>
            </li>

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <img src="https://www.digitalgujarat.gov.in/images/citizen/ChangeName_RC.png" alt="" width="55%">            
                 </div>

                 <a href="certificate.php">
                <h3 class="h3 card-title">Non-Creamy Layer Certificate</h3>
                 
                <p class="card-text">
                  This document issued by the government of India to individuals belonging to certain socially and economically backward classes. 
                </p>
              </a>

              </div>
            </li>

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <img src="https://www.digitalgujarat.gov.in/images/citizen/RemoveName_RC.png" alt="" width="55%">
                </div>

                <h3 class="h3 card-title">Removal Of Name From Ration Card</h3>

                <p class="card-text">
                 This process of removing a person's name from a government-issued document that is used to access subsidised food                </p>

              </div>
            </li>

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <img src="https://www.digitalgujarat.gov.in/images/citizen/SeniorCitizen.png" alt="" width="60%">
                </div>

                <h3 class="h3 card-title">Senior Citizen Certificate </h3>

                <p class="card-text">
                  A Senior Citizen Certificate is a document issued by the government to individuals who have reached a certain age, typically 60 or 65 years old.</p>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- Notice -->
      <section class="features" id="features">
        <div class="container">

        <div class="features-wrapper">
            <div class="notice" id="notice">
              
              <h3>Lasted Notices</h3>
              <marquee scrollamount="2" width="95%" direction="up" height="1000px" class="notice-block" onmouseover="this.stop();" onmouseout="this.start();">
                <a href="https://drive.google.com/file/d/1QWSxSpdeLyFGSmQWkrQAEgknUNFweJrP/view?usp=share_link">Click Here: </a>
                <p>Taluka Panchayat Notice - 10/02/2023</p>
                <br>
                <a herf="">Read more notices</a>
              </marquee>
            </div>

            <img src="./assets/images/features-img-2.png" alt="illustration art" class="notice-logo">
        </div>
      </section>

      <!-- New & Blog -->
      <section class="blog" id="blog">
        <div class="container">

          <h2 class="h2 section-title">Latest News</h2>
          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="blog-banner">
                  <img src="https://cmogujarat.gov.in/wp-content/uploads/2023/01/Sparsh-Mahotsav-4.jpeg" alt="Best Traveling Place">
                </figure>

                <div class="blog-meta">
                  <span>
                    <ion-icon name="calendar-outline"></ion-icon>
                    <time datetime="2021-04-10">January 19 2023</time>
                  </span>

                  <span>
                    <ion-icon name="person-outline"></ion-icon>
                    <p>admin</p>
                  </span>
                </div>

                <h3 class="blog-title">SPARSH MAHOTSAV AT AHMEDABAD</h3>
                <p class="blog-text">
                  The touch of spirit is very necessary to do good deeds and religious deeds to move forward in life: Chief Minister Shri Bhupendra Patel
                </p>

                <a href="#" class="blog-link-btn">
                  <span>Learn More</span>
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </a>
              </div>
            </li>

            <li>
              <div class="blog-card">
                <figure class="blog-banner">
                  <img src="https://cmogujarat.gov.in/wp-content/uploads/2023/01/74th-Republic-Day-4.jpeg" alt="Private Meeting Room">
                </figure>
                <div class="blog-meta">
                  <span>
                    <ion-icon name="calendar-outline"></ion-icon>
                    <time datetime="2021-04-10">January 26 2023</time>
                  </span>
                  <span>
                    <ion-icon name="person-outline"></ion-icon>
                    <p>admin</p>
                  </span>
                </div>
                <h3 class="blog-title">CELEBRATION OF 74TH REPUBLIC DAY AT BOTAD</h3>
                <p class="blog-text">
                  Gandhinagar, Thursday: As a part 74th Republic Day state-level celebration at Botad district Governor of Gujarat Shri Acharya Devvrat hoisted the national flag. 
                </p>
                <a href="#" class="blog-link-btn">
                  <span>Learn More</span>
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="blog-card">
                <figure class="blog-banner">
                  <img src="https://cmogujarat.gov.in/wp-content/uploads/2023/01/culture-event-botad-2.jpeg" alt="The Best Business Ideas">
                </figure>
                <div class="blog-meta">
                  <span>
                    <ion-icon name="calendar-outline"></ion-icon>
                    <time datetime="2021-04-10">January 25 2023</time>
                  </span>
                  <span>
                    <ion-icon name="person-outline"></ion-icon>
                    <p>admin</p>
                  </span>
                </div>
                <h3 class="blog-title">DHANYA DHARA BOTAD” CULTURAL PROGRAM</h3>
                <p class="blog-text">
                  Gandhinagar, Wednesday: As part of the 74th Republic Day celebration at the state level in Botad district, which is the Triveni Sangam of religion, faith and literature, a cultural program 
                </p>
                <a href="#" class="blog-link-btn">
                  <span>Learn More</span>
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </a>
              </div>
            </li>
          </ul>

        </div>
      </section>

     <!-- CONTACT -->
     <section class="contact" id="contact">
  <div class="container">

    <h2 class="h2 section-title">Contact Us</h2>

          <div class="contact-wrapper">
            <form action="" class="contact-form" id="contactForm">
              <div class="wrapper-flex">

                <div class="input-wrapper">
                  <label for="name">Name*</label>
                  <input type="text" name="name" id="name" required placeholder="Enter Your Name" class="input-field">
                  <span class="error-message" id="nameError"></span>
                </div>

                <div class="input-wrapper">
                  <label for="email">Email*</label>
                  <input type="email" name="email" id="email" required placeholder="Enter Your Email" class="input-field">
                  <span class="error-message" id="emailError"></span>
                </div>

              </div>

              <label for="message">Message*</label>
              <textarea name="message" id="message" required placeholder="Type Your Message" class="input-field"></textarea>
              <span class="error-message" id="messageError"></span>

              <button type="submit" class="btn btn-primary">
                <span>Send Message</span>
                <ion-icon name="paper-plane-outline"></ion-icon>
              </button>
            </form>

            <ul class="contact-list">

              <li>
                <a href="mailto:support@website.com" class="contact-link">
                  <ion-icon name="mail-outline"></ion-icon>

                  <span>: support@talukapanchayat.com</span>
                </a>
              </li>

              <li>
                <a href="#" class="contact-link">
                  <ion-icon name="globe-outline"></ion-icon>

                  <span>: www.talukapanchayat.netlify.app</span>
                </a>
              </li>

              <li>
                <a href="tel:+0011234567890" class="contact-link">
                  <ion-icon name="call-outline"></ion-icon>
                  <span>: (+001) 123 456 7890</span>
                </a>
              </li>

              <li>
                <div class="contact-link">
                  <ion-icon name="time-outline"></ion-icon>

                  <span>: 9:00 AM - 6:00 PM</span>
                </div>
              </li>

              <li>
                <a href="#" class="contact-link">
                  <ion-icon name="location-outline"></ion-icon>

                  <address>: Taluka Panchayat Office, Palanpur, Banaskantha</address>
                </a>
              </li>

            </ul>

          </div>

        </div>
      </section>

    </article>
  </main>


  
    <!-- FOOTER -->
    <footer>

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="https://i.ibb.co/ccJjT7b/footer-logo.png" alt="Landio logo" width="280px">
          </a>
          <p class="footer-text">
            A Taluka Panchayat is a local government body in India that is responsible for the administration of a taluka, which is a sub-district level administrative unit.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-item-title">ABOUT US</p>
            </li>

            <li>
              <a href="" class="footer-link">Works</a>
            </li>

            <li>
              <a href="" class="footer-link">Strategy</a>
            </li>

            <li>
              <a href="" class="footer-link">Releases</a>
            </li>

            <li>
              <a href="#" class="footer-link">Press</a>
            </li>

            <li>
              <a href="#" class="footer-link">Mission</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-item-title">CUSTOMERS</p>
            </li>

            <li>
              <a href="other-page/search.php" class="footer-link">Track Application</a>
            </li>

            <li>
              <a href="#" class="footer-link">Popular</a>
            </li>

            <li>
              <a href="#" class="footer-link">Customers</a>
            </li>

            <li>
              <a href="#" class="footer-link">Features</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-item-title">SUPPORT</p>
            </li>

            <li>
              <a href="#" class="footer-link">Developers</a>
            </li>

            <li>
              <a href="#" class="footer-link">Support</a>
            </li>

            <li>
              <a href="#" class="footer-link">Customer Service</a>
            </li>

            <li>
              <a href="login.php" class="footer-link">Get Started</a>
            </li>

            <li>
              <a href="#" class="footer-link">Guide</a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <!-- Copyright -->
    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2023 <a href="">Taluka Panchayat</a> All Right Reserved
        </p>
      </div>
    </div>

  </footer>

  <!-- translat website using google_translate -->
  <script type="text/javascript">
    function googleTranslateElementInit()
    {
      new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'gu,hi,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <!-- custom js link -->
  <script src="./assets/js/script.js"></script>

  <!-- ionicon link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>