<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Clinic and Services</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    
<!-- header section starts -->

<header class="header fixed-top">

    <div class="container">

        <div class="row align-items-center justify-content-between">

            <a href="#home" class="logo">dental<span>Clinic.</span></a>

            <nav class="nav">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
                <a href="/login">admin</a>
            </nav>

            <a href="#contact" class="link-btn">make appointment</a>

            <div id="menu-btn" class="fas fa-bars"></div>

        </div>
    </div>
</header>

<!-- header section ends -->

<!-- home section starts -->

<section class="home" id="home">

    <div class="container">

        <div class="row min-vh-100 align-items-center justify-content-center">
            <div class="content text-center text-md-center">
                <h3>Welcome to Dental Clinic and Services</h3>
                <p>We Want to See you Smile!</p>
                <a href="#contact" class="link-btn">make appointment</a>
            </div>
        </div>

    </div>

</section>

<!-- home section ends -->

<!-- about section starts -->

<section class="about" id="about">

    <div class="container">

        <div class="row align-items-center">

        <div class="col-md-6 image">
            <img src="img/abouts.jpg" class="w-100 mb-5 mb-md-0" alt="">
        </div>

        <div class="col-md-6 content">
            <span>about us</span>
            <h3>True Healthcare For Your Family</h3>
            <p>Welcome to our dental clinic, where we prioritize your oral health and smile. 
                With a dedicated team of experienced professionals, we offer personalized care tailored to your needs. 
                From routine check-ups to advanced procedures, we provide comprehensive dental services for patients of all ages.
                Our state-of-the-art facility ensures comfort and safety, while our commitment to excellence guarantees satisfaction.
                Trust us to restore and maintain your dental health, so you can smile with confidence.</p>
            <a href="#contact" class="link-btn">make appointment</a>
        </div>

    </div>

</div>

</section>

<!-- about section ends -->

<!-- services section starts -->

<section class="services" id="services">

    <h1 class="heading">our services</h1>

    <div class="box-container container">

        
        <div class="box">
            <img src="img\dental bond.png" alt="">
            <h3>Dental Bonding</h3>
            <p>Php 3,000</p>
        </div>

        <div class="box">
            <img src="img\dental crown.jpg" alt="">
            <h3>Dental Crowns</h3>
            <p>Php 5,000</p>
        </div>

        <div class="box">
            <img src="img\bridgework.png" alt="">
            <h3>Bridgework</h3>
            <p>Php 3,000</p>
        </div>

        <div class="box">
            <img src="img\cosmetic fills.png" alt="">
            <h3>Cosmetic Fillings</h3>
            <p>Php 7,000</p>
        </div>

        <div class="box">
            <img src="img\rootcanal therapy.png" alt="">
            <h3>Root Canal Therapy</h3>
            <p>Php 9,000</p>
        </div>

         <div class="box">
            <img src="img\invisalign.png" alt="">
            <h3>Invisalign</h3>
            <p>Php 8,000</p>
        </div>

        <div class="box">
            <img src="img\dental veeners.png" alt="">
            <h3>Dental Veeners</h3>
            <p>Php 8,000</p>
        </div>

        <div class="box">
            <img src="img\teeth cleanings.png" alt="">
            <h3>Teeth Cleanings</h3>
            <p>Php 2,000</p>
        </div>

        <div class="box">
            <img src="img\dentures.png" alt="">
            <h3>Dentures</h3>
            <p>Php 4,000</p>
        </div>

        <div class="box">
            <img src="img\teeth whitening.png" alt="">
            <h3>Teeth Whitening</h3>
            <p>Php 5,000</p>
        </div>

        <div class="box">
            <img src="img\tooth extractions.jpg" alt="">
            <h3>Tooth Extractions</h3>
            <p>Php 8,000</p>
        </div>

    </div>

</section>

<!-- services section ends -->


<!-- process section starts -->

<section class="process" id="process">

    <h1 class="heading">work process</h1>

    <div class="box-container container">

        <div class="box">
        <img src="img\process1.jpg" alt="">
            <h3>Cosmetic Dentistry</h3>
            <p>Enhance your smile with procedures like teeth whitening, veneers, 
                and smile makeovers for a radiant and confident appearance.</p>
        </div>

        <div class="box">
        <img src="img\process2.jpg" alt="">
            <h3>Pediatric Dentistry</h3>
            <p>Ensure your child's oral health with specialized care tailored to their unique needs, creating a positive 
                and comfortable dental experience from a young age.</p>
        </div>

        <div class="box">
        <img src="img\dental implants.png" alt="">
            <h3>Dental Implants</h3>
            <p>Restore missing teeth with durable and natural-looking implants, providing stability 
                and functionality for a seamless smile.</p>
        </div>

        <div class="box">
        <img src="img\resto dentistry.png" alt="">
            <h3>Restorative Dentistry</h3>
            <p>Repair and strengthen damaged or decayed teeth with treatments like fillings, crowns, and bridges, 
                restoring both function and aesthetics to your smile.</p>
        </div>
</div>
    </div>

</section>

<!-- process section ends -->


<!-- reviews section starts -->

<section class="reviews" id="reviews">

    <h1 class="heading">satisfied clients</h1>

    <div class="box-container container">

    <div class="box">
        <img src="img\reviews1.png" alt="">
            <p>Services are good somehow.</p>
            
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ezekim Lacena</h3>
            <span>satisfied client</span>
        </div>

        <div class="box">
        <img src="img\reviews2.png" alt="">
            <p>The clinic serves good services making sure they met
                the expectations of their clients.</p>
            
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Shang Lara</h3>
            <span>satisfied client</span>
        </div>
        
    </div>

</section>

<!-- reviews section ends -->


<!-- contact section starts -->

<section class="contact" id="contact">

    <h1 class="heading">make appointment</h1>

    <form action="appointment/store" method="POST">

        @csrf
        <span>First Name:</span>
        <input type="text" name="first_name" placeholder="" class="box">
        
        <span>Last Name:</span>
        <input type="text" name="last_name" placeholder="" class="box">

        <span>Age:</span>
        <input type="text" name="age" placeholder="" class="box">

        <span>address:</span>
        <input type="text" name="address" placeholder="" class="box">

        <span>your number:</span>
        <input type="number" name="number" placeholder="" class="box">

        <span>your number:</span>
        <input type="email" name="email" placeholder="" class="box">

        <!-- Services Checkboxes -->
        <span>Select Services:</span>
        <div>
            <input type="checkbox" id="service1" name="services[]" value="Dental Bonding">
            <label for="service1">Dental Bonding</label>
        </div>
        <div>
            <input type="checkbox" id="service2" name="services[]" value="Dental Crowns">
            <label for="service2">Dental Crowns</label>
        </div>
        <div>
            <input type="checkbox" id="service3" name="services[]" value="Bridgework">
            <label for="service3">Bridgework</label>
        </div>
        <!-- Add more checkboxes as needed -->

        <span>appointment date:</span>
        <input type="date" name="appointment_date" class="box">

        <span>appointment time:</span>
        <input type="time" name="appointment_time" class="box">

        <button type="submit" name="submit" class="link-btn">
            make appointment
        </button>
    </form>
</section>

<!-- contact section ends -->


<!-- footer section starts -->

<section class="footer">

    <div class="box-container container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+916-243-0517</p>
                <p>+901-021-0709</p>
             </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>our address</h3>
                <p>Davao City - 8000</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>opening hours</h3>
                <p>07:00am to 10:00pm</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <p>triciamaelabra02@gmail.com</p>
                <p>mariananito@gmail.com</p>
            </div>

            <p class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>ms. web designer</span> </div>



<!-- footer section ends -->

<!-- custom js file link -->
<script src="js/script.js"></script>


</body>
</html>