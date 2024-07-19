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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/minty/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/testimonials/testimonial-3/assets/css/testimonial-3.css" />
    <!-- custom css file link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <!-- header section starts -->

    <header class="header fixed-top" id="mainNav">
        <nav >
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <a href="#home" class="logo">dental<span>Clinic.</span></a>
                    </div>

                    <div class="col">
                        <nav class="nav d-flex justify-content-center">
                            <a href="#about">about</a>
                            <a href="#procedure">procedures</a>
                            <a href="#services">services</a>
                            <a href="#reviews">reviews</a>
                            <a href="#contact">contact</a>
                            <a href="/login">admin</a>
                        </nav>
                    </div>

                    <div class="col-auto">
                        <a href="#contact" class="link-btn">make appointment</a>
                    </div>

                    <div id="menu-btn" class="fas fa-bars"></div>
                </div>
            </div>
        </nav>

    </header>

    <!-- header section ends -->

    <!-- home section starts -->

    <section class="home  sm-section" id="home">

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

    <!-- About Us Section -->
    <section class="py-3 py-md-5 py-xl-8" id="about">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 section-header">
                    <h2 class="mb-4 display-5 text-center">About Us</h2>
                    <p class=" mb-5 text-center lead fs-4">we are committed to providing exceptional dental care in a warm and welcoming environment.</p>
                    <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row gy-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid rounded border" loading="lazy" src="img/abouts.jpg" alt="About Us">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6">
                    <div class="row justify-content-lg-end">
                        <div class="col-12 col-lg-11">
                            <div class="about-wrapper">
                                <p class="lead mb-4 mb-md-5">Welcome to our dental clinic, where we prioritize your oral health and smile.
                                    With a dedicated team of experienced professionals, we offer personalized care tailored to your needs.
                                    From routine check-ups to advanced procedures, we provide comprehensive dental services for patients of all ages.
                                    Our state-of-the-art facility ensures comfort and safety, while our commitment to excellence guarantees satisfaction.
                                    Trust us to restore and maintain your dental health, so you can smile with confidence.</p>
                                <div class="row gy-4 mb-4 mb-md-5">
                                    <div class="col-12 col-md-6">
                                        <div class="card border border-dark">
                                            <div class="card-body p-4">
                                                <h3 class="display-5 fw-bold text-primary text-center mb-2">{{$dentistCount}}+</h3>
                                                <p class="fw-bold text-center m-0">Qualified Experts</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card border border-dark">
                                            <div class="card-body p-4">
                                                <h3 class="display-5 fw-bold text-primary text-center mb-2">{{$patients}}+</h3>
                                                <p class="fw-bold text-center m-0">Satisfied Clients</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#!" class="btn btn-primary bsb-btn-2xl">
                                    Explore
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about section ends -->

    <!-- Procedures-->
    <section class="services py-3 py-md-5 py-xl-8" id="procedure">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 section-header">
                    <h2 class="mb-4 display-5 text-center text-light">Procedures</h2>
                    <p class="text-white mb-5 text-center lead fs-4">We believe in the power of teamwork and collaboration. Our diverse experts work tirelessly to deliver innovative solutions tailored to our clients' needs.</p>
                    <hr class="w-50 mx-auto mb-5 mb-xl-9 border-light-subtle">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="container-fluid">
                        <div class="row gy-3 gy-md-4">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card border-light">
                                    <div class="card-body text-center p-4 p-xxl-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-box-fill text-primary mb-4" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.004-.001.274-.11a.75.75 0 0 1 .558 0l.274.11.004.001zm-1.374.527L8 5.962 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339Z" />
                                        </svg>
                                        <h4 class="mb-4">Dental Bonding</h4>
                                        <p class="mb-4">Dental bonding is a quick and effective procedure to repair chipped, discolored, or decayed teeth using a tooth-colored resin material. This non-invasive treatment enhances the appearance of your teeth and provides a natural-looking result, improving your smile with minimal effort.</p>
                                        <a href="#!" class="btn btn-outline-primary bsb-btn-circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card border-light">
                                    <div class="card-body text-center p-4 p-xxl-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-capsule text-primary mb-4" viewBox="0 0 16 16">
                                            <path d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429z" />
                                        </svg>
                                        <h4 class="mb-4">Dental Crowns</h4>
                                        <p class="mb-4 ">Dental crowns are protective caps placed over damaged or weakened teeth to restore their shape, size, strength, and appearance. Crowns are made from durable materials and are custom-designed to match the color and contour of your natural teeth, providing long-lasting and aesthetically pleasing results.</p>
                                        <a href="#!" class="btn btn-outline-primary bsb-btn-circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card border-light">
                                    <div class="card-body text-center p-4 p-xxl-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-clipboard-check-fill text-primary mb-4" viewBox="0 0 16 16">
                                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                                        </svg>
                                        <h4 class="mb-4">Cosmetic Filling</h4>
                                        <p class="mb-4 ">Cosmetic fillings, also known as tooth-colored fillings, are used to repair decayed or damaged teeth while blending seamlessly with your natural tooth color. These fillings are made from composite resin and provide a durable, natural-looking solution for restoring the health and appearance of your teeth.</p>
                                        <a href="#!" class="btn btn-outline-primary bsb-btn-circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card border-light">
                                    <div class="card-body text-center p-4 p-xxl-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-diamond-half text-primary mb-4" viewBox="0 0 16 16">
                                            <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098zM8 .989c.127 0 .253.049.35.145l6.516 6.516a.495.495 0 0 1 0 .7L8.35 14.866a.5.5 0 0 1-.35.145z" />
                                        </svg>
                                        <h4 class="mb-4">Root Canal Therapy</h4>
                                        <p class="mb-4 ">Root canal therapy is a treatment designed to save an infected or decayed tooth by removing the damaged pulp, cleaning the inside of the tooth, and sealing it to prevent further infection. This procedure alleviates pain, eliminates infection, and preserves the natural tooth structure, ensuring long-term oral health.</p>
                                        <a href="#!" class="btn btn-outline-primary bsb-btn-circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card border-light">
                                    <div class="card-body text-center p-4 p-xxl-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-eraser-fill text-primary mb-4" viewBox="0 0 16 16">
                                            <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828zm.66 11.34L3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293z" />
                                        </svg>
                                        <h4 class="mb-4">Invisalign</h4>
                                        <p class="mb-4">Invisalign is a modern orthodontic treatment that uses clear, custom-made aligners to gradually straighten teeth without the need for traditional metal braces. The aligners are virtually invisible, removable for eating and cleaning, and provide a comfortable and convenient solution for achieving a beautifully aligned smile.</p>
                                        <a href="#!" class="btn btn-outline-primary bsb-btn-circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card border-light">
                                    <div class="card-body text-center p-4 p-xxl-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-front text-primary mb-4" viewBox="0 0 16 16">
                                            <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2z" />
                                        </svg>
                                        <h4 class="mb-4">Dental Veeners</h4>
                                        <p class="mb-4">Dental veneers are thin, custom-made shells designed to cover the front surface of teeth to improve their appearance. Made from porcelain or composite resin, veneers address issues such as discoloration, chips, gaps, and misalignment, providing a natural and attractive look for a flawless smile.</p>
                                        <a href="#!" class="btn btn-outline-primary bsb-btn-circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="container-fluid">
                        <div class="row gy-3 gy-md-4">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card border-light">
                                    <div class="card-body text-center p-4 p-xxl-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-box-fill text-primary mb-4" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.004-.001.274-.11a.75.75 0 0 1 .558 0l.274.11.004.001zm-1.374.527L8 5.962 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339Z" />
                                        </svg>
                                        <h4 class="mb-4">Teeth Cleanings</h4>
                                        <p class="mb-4">Professional teeth cleanings are essential for maintaining optimal oral health and hygiene. This routine procedure involves removing plaque, tartar, and stains from your teeth, preventing gum disease and tooth decay. Regular cleanings help keep your smile bright and your mouth healthy.</p>
                                        <a href="#!" class="btn btn-outline-primary bsb-btn-circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card border-light">
                                    <div class="card-body text-center p-4 p-xxl-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-capsule text-primary mb-4" viewBox="0 0 16 16">
                                            <path d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429z" />
                                        </svg>
                                        <h4 class="mb-4">Teeth Whitening</h4>
                                        <p class="mb-4">Teeth whitening is a safe and effective cosmetic procedure designed to brighten your smile by removing stains and discoloration from your teeth. Professional whitening treatments provide faster and more noticeable results compared to over-the-counter products, enhancing your smile's radiance and boosting your confidence.</p>
                                        <a href="#!" class="btn btn-outline-primary bsb-btn-circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card border-light ">
                                    <div class="card-body text-center p-4 p-xxl-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-clipboard-check-fill text-primary mb-4" viewBox="0 0 16 16">
                                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                                        </svg>
                                        <h4 class="mb-4">Tooth Extractions</h4>
                                        <p class="mb-4">Tooth extractions involve the removal of damaged, decayed, or impacted teeth to maintain or improve oral health. This procedure may be necessary for various reasons, including severe decay, infection, or overcrowding. Extractions are performed with care to ensure your comfort and promote optimal healing.</p>
                                        <a href="#!" class="btn btn-outline-primary bsb-btn-circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Service-->
    <section class="bg-light py-5 py-xl-8" id="services">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 section-header">
                    <h3 class="fs-6 mb-2 text-secondary text-center text-uppercase">What We Do?</h3>
                    <h2 class="display-5 mb-5 text-center">We are giving you perfect solutions with our proficient services.</h2>
                    <hr class="w-50 mx-auto mb-5 mb-xl-9 border-white-subtle">
                </div>
            </div>
        </div>

        <div class="container overflow-hidden">
            <div class="row gy-4 gy-xl-0">
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card border-0 border-bottom border-primary shadow-sm">
                        <div class="card-body text-center p-4 p-xxl-5">
                            <img src="https://img.icons8.com/?size=80&id=42718&format=png&color=56cc9d">

                            <h4 class="mb-4">Pediatric Dentistry</h4>
                            <p class="mb-4 ">We provide gentle and compassionate dental care for children, ensuring a positive experience and helping to establish a foundation of good oral health habits from an early age.</p>
                            <a href="#!" class="fw-bold text-decoration-none link-primary">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card border-0 border-bottom border-primary shadow-sm">
                        <div class="card-body text-center p-4 p-xxl-5">
                            <img src="https://img.icons8.com/?size=80&id=123858&format=png&color=56cc9d">
                            <h4 class="mb-4">Cosmetic Dentistry</h4>
                            <p class="mb-4 ">Enhance the appearance of your smile with our cosmetic dentistry services, including teeth whitening, veneers, and bonding. We use the latest techniques to give you a radiant smile.</p>
                            <a href="#!" class="fw-bold text-decoration-none link-primary">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card border-0 border-bottom border-primary shadow-sm">
                        <div class="card-body text-center p-4 p-xxl-5">
                            <img src="https://img.icons8.com/?size=80&id=0JPRVwhzjkWV&format=png&color=56cc9d">
                            <h4 class="mb-4">Restorative Dentistry</h4>
                            <p class="mb-4 ">From fillings and crowns to bridges and dentures, our restorative dentistry services aim to repair and replace damaged or missing teeth, restoring function and aesthetics to your smile.</p>
                            <a href="#!" class="fw-bold text-decoration-none link-primary">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card border-0 border-bottom border-primary shadow-sm">
                        <div class="card-body text-center p-4 p-xxl-5">
                            <img src="https://img.icons8.com/?size=80&id=MmdnMTF59fIH&format=png&color=56cc9d">
                            <h4 class="mb-4">Orthodontics</h4>
                            <p class="mb-4 ">Straighten your teeth and improve your bite with our orthodontic treatments, including traditional braces and Invisalign. We provide customized solutions for both children and adults.</p>
                            <a href="#!" class="fw-bold text-decoration-none link-primary">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class=" py-5 py-xl-8 services" id="reviews">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 section-header">
                    <h2 class="fs-6 text-light mb-2 text-uppercase text-center">Happy Customers</h2>
                    <h2 class="display-5 text-center text-light">We deliver what we promise. See what clients are expressing about us.</h2>
                    <hr class="w-50 mx-auto mb-5 mb-xl-9 border-light-subtle">
                </div>
            </div>
        </div>

        <div class="container overflow-hidden ">
            <div class="row gy-4 gy-md-0 gx-xxl-5">
                <div class="col-12 col-md-4">
                    <div class="card border-0 border-bottom border-primary shadow-sm">
                        <div class="card-body p-4 p-xxl-5">
                            <figure>
                                <img class="img-fluid rounded rounded-circle mb-4 border border-5" loading="lazy" src="https://picsum.photos/100" alt="">
                                <figcaption>
                                    <div class="bsb-ratings text-warning mb-3" data-bsb-star="5" data-bsb-star-off="0"></div>
                                    <blockquote class="bsb-blockquote-icon mb-4">I've always been nervous about going to the dentist, but the team at Dental Clinic made me feel completely at ease. From the friendly reception to the professional care, my experience was top-notch. Dr. Smith did an amazing job on my dental bonding, and I couldn’t be happier with the results. Highly recommend to anyone looking for a caring and skilled dental clinic!</blockquote>
                                    <h4 class="mb-2">Luna John</h4>
                                    <h5 class="fs-6 text-secondary mb-0"></h5>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card border-0 border-bottom border-primary shadow-sm">
                        <div class="card-body p-4 p-xxl-5">
                            <figure>
                                <img class="img-fluid rounded rounded-circle mb-4 border border-5" loading="lazy" src="https://picsum.photos/100" alt="">
                                <figcaption>
                                    <div class="bsb-ratings text-warning mb-3" data-bsb-star="4" data-bsb-star-off="1"></div>
                                    <blockquote class="bsb-blockquote-icon mb-4">Dental Clinic has completely changed how I feel about dental visits. Dr. Patel and her staff are incredibly welcoming and professional. I had a root canal therapy and a couple of cosmetic fillings done, and both procedures were painless and efficient. My teeth look and feel great! The follow-up care and attention to detail truly set this clinic apart.</blockquote>
                                    <h4 class="mb-2">Mark Smith</h4>
                                    <h5 class="fs-6 text-secondary mb-0"></h5>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card border-0 border-bottom border-primary shadow-sm">
                        <div class="card-body p-4 p-xxl-5">
                            <figure>
                                <img class="img-fluid rounded rounded-circle mb-4 border border-5" loading="lazy" src="https://picsum.photos/100" alt="">
                                <figcaption>
                                    <div class="bsb-ratings text-warning mb-3" data-bsb-star="5" data-bsb-star-off="0"></div>
                                    <blockquote class="bsb-blockquote-icon mb-4">After years of being self-conscious about my smile, I decided to visit Dental Clinic for Invisalign treatment. The entire process was smooth and hassle-free. Dr. Lee provided excellent guidance and support throughout my treatment. Now, my teeth are beautifully aligned, and I couldn't be happier. The confidence boost is incredible! Thank you, Dental Clinic, for giving me my smile back</blockquote>
                                    <h4 class="mb-2">Luke Reeves</h4>
                                    <h5 class="fs-6 text-secondary mb-0"></h5>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- contact section starts -->

    <section class="container contact py-5" id="contact">
        <h1 class="text-center mb-4 fs-1">Make Appointment</h1>

        <form action="{{route('client.submit')}}" method="POST" class="row g-3 fs-5">

            @csrf

            <div class="col-md-6">
                <label for="first_name" class="form-label">First Name:</label>
                <input type="text" name="first_name" id="first_name" placeholder="Enter First Name" class="form-control">
            </div>

            <div class="col-md-6">
                <label for="last_name" class="form-label">Last Name:</label>
                <input type="text" name="last_name" id="last_name" placeholder="Enter Last Name" class="form-control">
            </div>

            <div class="col-md-6">
                <label for="age" class="form-label">Age:</label>
                <input type="text" name="age" id="age" placeholder="Enter Age" class="form-control">
            </div>

            <div class="col-md-6">
                <label for="address" class="form-label">Address:</label>
                <input type="text" name="address" id="address" placeholder="Enter Address" class="form-control">
            </div>

            <div class="col-md-6">
                <label for="number" class="form-label">Your Number:</label>
                <input type="number" name="number" id="number" placeholder="Enter Your Number" class="form-control">
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">Your Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter Your Email" class="form-control">
            </div>

            <div class="col-12">
                <label class="form-label">Select Services:</label>
                @foreach($procedures as $procedure)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="procedures[]" value="{{ $procedure->id }}" id="procedure{{ $procedure->id }}">
                    <label class="form-check-label" for="procedure{{ $procedure->id }}">
                        {{ $procedure->name }}
                    </label>
                </div>
                @endforeach
            </div>

            <div class="col-md-6">
                <label for="appointment_date" class="form-label">Appointment Date:</label>
                <input type="date" name="appointment_date" id="appointment_date" class="form-control">
            </div>

            <div class="col-md-6">
                <label for="appointment_time" class="form-label">Appointment Time:</label>
                <input type="time" name="appointment_time" id="appointment_time" class="form-control">
            </div>

            <div class="col-12 text-center">
                <button type="submit" name="submit" class="link-btn">Make Appointment</button>
            </div>

        </form>
    </section>

    <!-- contact section ends -->


    <!-- footer section starts -->
    <!-- Footer 2 - Bootstrap Brain Component -->
    <footer class="footer">

        <!-- Widgets - Bootstrap Brain Component -->
        <section class="services py-4 py-md-5 py-xl-8 border-top border-light" id="footer">
            <div class="container overflow-hidden">
                <div class="row gy-4 gy-lg-0 justify-content-xl-between">
                    <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                        <div class="widget">
                            <div class="col-auto">
                                <a href="#home" class="logo">dental<span>Clinic.</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                        <div class="widget">
                            <h4 class="widget-title mb-4">Get in Touch</h4>
                            <address class="mb-4 text-light">New, Matina Pangi Rd, Davao City, Davao del Sur</address>
                            <p class="mb-1">
                                <a class="link-light text-decoration-none" href="tel:+15057922430">(082) 227 5456</a>
                            </p>
                            <p class="mb-0">
                                <a class="link-light text-decoration-none" href="mailto:demo@yourdomain.com">support@dentalclinic.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                        <div class="widget">
                            <h4 class="widget-title mb-4">Learn More</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="/#about" class="link-light text-decoration-none">About</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#procedure" class="link-light text-decoration-none">Procedures</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#services" class="link-light text-decoration-none">Services</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#reviews" class="link-light text-decoration-none">Testimonials</a>
                                </li>
                                <li class="mb-0">
                                    <a href="#!" class="link-light text-decoration-none">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-xl-4">
                        <div class="widget">
                            <h4 class="widget-title mb-4">Our Newsletter</h4>
                            <p class="mb-4 text-light">Subscribe to our newsletter to get our news & discounts delivered to you.</p>
                            <form action="#!">
                                <div class="row gy-4">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <span class="input-group-text" id="email-newsletter-addon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                </svg>
                                            </span>
                                            <input type="email" class="form-control" id="email-newsletter" value="" placeholder="Email Address" aria-label="email-newsletter" aria-describedby="email-newsletter-addon" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary" type="submit">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Copyright - Bootstrap Brain Component -->
        <div class=" py-4 py-md-5 py-xl-8 border-top border-light-subtle">
            <div class="container overflow-hidden">
                <div class="row gy-4 gy-md-0 align-items-md-center">
                    <div class="col-xs-12 col-md-7 order-1 order-md-0">
                        <div class="copyright text-center text-md-start">
                            &copy; <?php echo date('Y'); ?>. All Rights Reserved.
                        </div>
                        <!-- <div class="credits text-secondary text-center text-md-start mt-2 fs-8">
                            Built by <a href="https://bootstrapbrain.com/" class="link-secondary text-decoration-none">BootstrapBrain</a> with <span class="text-primary">&#9829;</span>
                        </div> -->
                    </div>

                    <div class="col-xs-12 col-md-5 order-0 order-md-1">
                        <div class="social-media-wrapper">
                            <ul class="list-unstyled m-0 p-0 d-flex justify-content-center justify-content-md-end">
                                <li class="me-3">
                                    <a href="#!" class="link-dark link-opacity-75-hover">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="me-3">
                                    <a href="#!" class="link-dark link-opacity-75-hover">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="me-3">
                                    <a href="#!" class="link-dark link-opacity-75-hover">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#!" class="link-dark link-opacity-75-hover">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <!-- footer section ends -->

    <!-- custom js file link -->
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            document.querySelector('.nav').classList.toggle('active');
        });

        window.addEventListener('DOMContentLoaded', event => {

            // Navbar shrink function
            var navbarShrink = function() {
                const navbarCollapsible = document.body.querySelector('#mainNav');
                if (!navbarCollapsible) {
                    return;
                }
                if (window.scrollY === 0) {
                    navbarCollapsible.classList.remove('navbar-shrink')
                    navbarCollapsible.classList.remove('navbar-solid')
                } else {
                    navbarCollapsible.classList.add('navbar-shrink')
                    navbarCollapsible.classList.add('navbar-solid')
                }

            };

            // Shrink the navbar 
            navbarShrink();

            // Shrink the navbar when page is scrolled
            document.addEventListener('scroll', navbarShrink);

            // // Activate Bootstrap scrollspy on the main nav element
            // const mainNav = document.body.querySelector('#mainNav');
            // if (mainNav) {
            //     new bootstrap.ScrollSpy(document.body, {
            //         target: '#mainNav',
            //         rootMargin: '0px 0px -40%',
            //     });
            // };

            // // Collapse responsive navbar when toggler is visible
            // const navbarToggler = document.body.querySelector('.navbar-toggler');
            // const responsiveNavItems = [].slice.call(
            //     document.querySelectorAll('#navbarResponsive .nav-link')
            // );
            // responsiveNavItems.map(function(responsiveNavItem) {
            //     responsiveNavItem.addEventListener('click', () => {
            //         if (window.getComputedStyle(navbarToggler).display !== 'none') {
            //             navbarToggler.click();
            //         }
            //     });
            // });


        });
    </script>

</body>

</html>