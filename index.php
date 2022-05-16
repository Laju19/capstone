<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  

  <title>Intelligent Healthcare</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/droneicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <script src=https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js></script>

  <!-- Google Fonts -->
  <link href=https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- LEAFLET  LINKS -->
  <link rel="stylesheet" href=https://unpkg.com/leaflet@1.7.1/dist/leaflet.css
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>

   <script src=https://unpkg.com/leaflet@1.7.1/dist/leaflet.js
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   
   <style>
     #mapContainer { 
       height: 800px;
       width: 100%;
       margin: 2%;
       }
       .custom{
         width:100%
      }
    
      .inputs{
        margin-top: 9%;
        width: 60%;
        margin-left: 1.5%;
        
      }
      
      .custom-container{
        padding-right:3% ;
        width: 100%;
        margin-left: 37%;
      }

     
         
   </style>

</head>

<body onload="getLocation()";> 

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/droneicon.png" alt="">
        <span>Drone Aid</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#faq">Health Tips</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Emergency Tips</a></li>
          <li><a class="nav-link scrollto" href="#main">About Us</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#main">ORDER A KIT</a></li>
          <li><a class="getstarted scrollto" href="#main">REPORT AN EMERGENCY</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Drone Aid focuses on providing quick first aid to customers and a response system for fire disasters</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We provide an easy-to-use web application for all citizens that may need our services</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>ORDER A FIRST AID KIT</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>REPORT AN EMERGENCY</span>
                <i class="bi bi-arrow-right"></i>
              </a>
          </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/Dronepic1.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      
   

      <div class="container custom-container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content" style="padding-left: 0%;">
    
              <!-- =====GEOLOCATION API====== -->
              <div id="wrapper">
                <form type ="form"   method ="POST"  id="userForm" class ="myForm" autocomplete ="off">
                <input  type="hidden"  name ="latitude" value=""> 
                  <input type="hidden"  name ="longitude" value=""> 

               <button  type ="button" id="button" name="submit"   class="current-location" 
                style="
                margin-top: 30px;
                line-height: 0;
                padding: 15px 40px;
                border-radius: 4px;
                transition: 0.5s;
                color: #fff;
                background: #4154f1;
               
                font-family: 'Open Sans', sans-serif;

                " >
                  <h3 style="color: white; height:5px; width:225px;border-color:#4154f1; font-size:16px ;">CURRENT LOCATION</h3>
                </button>
                </form>
                <!--<p style="margin-left: 13%;"><a href="#contact">Contact Us - Call for help</a></p>-->
              </div>

               <!-- ======= Autocomplete Address GeoApify ======= -->
              <div class="autocomplete-container" id="autocomplete-container" style="padding-top: 5%; padding-right: 20%; ">
                     <script>
                       
                      
                     </script>   
              
              </div>

            </div>
           
            

          </div>
        </div>
      </div>

          <div class="col-lg-6 d-flex align-items-center custom" data-aos="zoom-out" data-aos-delay="200">  
         

          <div id="mapContainer" class="mapContainer" >
                  <script src=https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js></script>

          <script  type ="text/javascript">

           function getLocation(){
             if (navigator.geolocation){
               navigator.geolocation.getCurrentPosition(showPosition);
            }
             
           }
           function showPosition(position){
               
            document.querySelector('.myForm input[name= "latitude"]').value= position.coords.latitude;
            document.querySelector('.myForm input[name= "longitude"]').value= position.coords.longitude;
                $(document).on('click','#userForm',function(e){
        e.preventDefault();
       
        $.ajax({
        method:"POST",
        url: "database/index.php",
        data:$(this).serialize(),
        success: function(data){
        $('#userForm').find('input').val('')

    }});
});

           }
            const currentLocation = () => {
            const status = document.querySelector('.status');

            const success = (position) => {
              console.log(position)
              const latitude = position.coords.latitude;
              const longitude = position.coords.longitude;
              alert("Location received. Please stand by!")
              var map = L.map('mapContainer').setView([latitude, longitude], 17); //17 is the zoom level
              const attribution = '&copy; <a href=https://www.openstreetmap.org/copyright>OpenStreetMap</a> contributors';
              
              const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
              const tiles = L.tileLayer(tileUrl,{attribution });
              tiles.addTo(map);

              const geoApi = `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${latitude}&longitude=${longitude}&localityLanguage=en`

              L.marker([latitude, longitude]).addTo(map);

              fetch(geoApi)
              .then(res => res.json())
              .then(data => {
              console.log(data)
              })

            }
              const error = () => {
              status.textContent = 'Please enter location again';
            }
            navigator.geolocation.getCurrentPosition(success, error);
      } 

        document.querySelector('.current-location').addEventListener('click', currentLocation);
          
          </script>
        
          </div>        

        





    </section><!-- End About Section -->

   
    
    <!-- ======= HEALTH TIPS Section ======= -->
    <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Health Tips</h2>
          <p>Tips to help you lead a healthier life</p>
        </header>

        <div class="row">
          <div class="col-lg-6">
           <!-- Health tip List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    Get Enough Sleep
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Getting enough sleep can help boost your immune system, strengthen your heart, 
                    increase exercise performance and improve memory. 
                    <br><br> Poor sleep often causes insulin 
                    resistance and disrupt your appetit hormones. It also reduces your physical and mental performance.
                    </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Avoid Ultra-processed Foods
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    These types of food contain ingredients that 
                    are significantly modified from their original form.
                    They often contain additives like added sugar, highly refined oil, salt, 
                    preservatives, artificial sweeteners, colors, and flavors as well.
                    <br><br> In addition to low quality ingredients like inflammatory fats, added sugar, 
                    and refined grains, they are usually low in fiber, protein, and micronutrients. 
                    Thus, they provide mostly empty calories.
                    </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Stay Hydrated
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    It is important that you stay hydrated to ensure that your
                    body is functioning optimally and that your blood volume is sufficient.
                    <br><br> Drinking water is the best way to stay hydrated, as it is free of calories, sugar, and additives.
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">

            <!-- Health tip List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    Do Not Eat Heavily Charred Meats
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Meat can be a nutritious and healthy part of your diet. 
                    It is very high in protein and a rich source of nutrients.
                    <br><br> However, problems occur when meat is charred or burnt. 
                    This charring can lead to the formation of harmful compounds that may increase your risk for certain cancers
                    </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    Take Vitamin D if you are Deficient
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Maintaining adequate vitamin D levels can help to optimize your health by improving bone strength, 
                    reducing symptoms of depression, strengthening your immune system, and lowering your risk for cancer
                    <br><br> If you do not spend a lot of time in the sunlight, your vitamin D levels may be low.
                 </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    Eat Plenty of Fruits and Vegetables
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Vegetables and fruits are loaded with prebiotic fiber, vitamins, 
                    minerals, and antioxidants, many of which have potent health effects.
                    <br><br>
                    Studies show that people who eat more vegetables and fruits tend to live longer 
                    and have a lower risk for heart disease, obesity, and other illnesses
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- End F.A.Q Section -->

    <!-- ======= EMERGENCY TIPS Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Emergency Tips</h2>
          <p>Emergency guides you may need</p>
        </header>

        

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/medical.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href=tel:112>Call for medical help</a></h4>
                <p>If you suspect the sick or injured person needs 
                  emergency medical care, call 112</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/bandage.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href=https://www.healthline.com/health/first-aid#bandage> Apply first aid BANDAGE</a></h4>
                <p>In many cases, you can use an adhesive bandage to cover minor cuts, scrapes, or burns. 
                  <br>To cover and protect larger wounds, you might need to apply a clean gauze pad or roller bandage.</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/cpr.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href=https://www.healthline.com/health/first-aid#cpr>First Aid CPR</a></h4>
                <p>If you see someone collapse or find someone unconscious, 
                  call 112. If the area around the unconscious person seems safe, approach them and begin CPR.
                  <br>
                  Even if you do not have formal training, you can use hands-only CPR to help keep someone alive until professional help arrives.</p>
                
              </div>
            </div>
          </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/burn.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href=https://www.healthline.com/health/first-aid#burns>First Aid for BURNS</a></h4>
                <p>To treat a minor burn, run cool water over the affected area for up to 15 minutes. 
                  <br>If that is not possible, apply a cool compress to the area instead. 
                  <br>Avoid applying ice to burned tissue. It can cause more damage.</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/nosebleed.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href=https://www.healthline.com/health/first-aid#nosebleed>First Aid for NOSEBLEEDS</a></h4>
                <p>
                To treat someone with a nosebleed, ask them to:<br><br>
                Sit down and lean their head forward.
                Using the thumb and index finger, firmly press or pinch the nostrils closed.
                Continue to apply this pressure continuously for five minutes.
                Check and repeat until the bleeding stops.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/heart.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href=https://www.healthline.com/health/first-aid#heart-attack>First Aid for HEART ATTACKS</a></h4>
                <p>If you think someone might be experiencing a heart attack, 
                  call 911. If they have been prescribed nitroglycerin, 
                  help them locate and take this medication. 
                  <br>
                  Cover them with a blanket and comfort them until professional help arrives.
                  <br>
                  If they have difficulty breathing, loosen any clothing around their chest and neck. 
                  Start CPR if they lose consciousness.</p>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/baby.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href=https://www.healthline.com/health/first-aid#babies>First aid kit for BABIES</a></h4>
                <p>If you have a baby, you might need to replace or supplement some of the products in a 
                  <br>standard first aid kit with infant-appropriate alternatives. 
                  <br> For example, your kit should include an infant thermometer and infant acetaminophen or ibuprofen.</p>
           
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/heat.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href=https://www.healthline.com/health/first-aid#heatstroke>First aid for HEATSTROKE</a></h4>
                <p>When your body overheats, it can cause heat exhaustion which can lead to a heatstroke
                  <br> If someone is overheated, encourage them to rest in a cool location.
                  <br> Cover them with a cool, damp sheet, apply a cool, 
                  <br>wet towel to the back of their neck or spongethem with cool water.  
                </p>
          
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/bee.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href=https://www.healthline.com/health/first-aid#bee-sting>First aid for BEE STING</a></h4>
                <p>
                  If a person is having an allergic reaction to a bee sting, <a href=tel:112>Call 112</a>.
                  <br>To treat itching or pain from the sting, consider applying calamine lotion 
                  <br>or a paste of baking soda and water to the area several times a day.
                </p>

              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->

    

   

  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Ashesi University,<br>Berekuso, Eastern Region 00233</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <a href=tel:192>Fire Service</a>
                  <br>
                  <a href=tel:193>Ambulance</a>
                  <br>
                  <a href=tel:112>Police</a>
                  <br>
                  <a href=tel:+233302773900>Police Headquarters</a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>lajuoyan2014@gmail.com<br>ofeoritselaju.oyan@ashesi.edu.gh</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Sunday<br>All hours</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/droneicon.png" alt="">
              <span>DroneAid</span>
            </a>
            <p>Drone Aid focuses on providing quick first aid to customers and a response system for fire disasters.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#header">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#haeder">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Health Tips</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Emergency Tips</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#header">Drone Delivery</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#header">Disaster Response</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Ashesi University <br>
              Berekuso, Eastern Region<br>
              Ghana <br><br>
              <strong>Phone:</strong> +233 5788 65074<br>
              <strong>Email:</strong> lajuoyan2014@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href=https://bootstrapmade.com>BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->

  <!-- JavaScript Source geolocation -->
  <script src="assets/js/location.js"></script>
  <script src="assets/js/main.js"></script>


</body>

</html>
