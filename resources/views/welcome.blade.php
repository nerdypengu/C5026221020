<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Mojiken Studio</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Website Icon -->
    <link rel="shortcut icon" href="https://64.media.tumblr.com/avatar_2dd0b9714013_128.pnj" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <div>
                <a href="index.html"><img src="assets/mojiken-logo-website.png" style="width: 80px; height: 80px" /></a>
            </div>

            <nav id="navbar" class="navbar py-3" style="min-height: 20%">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#latest">Latest News</a></li>
                    <li><a class="nav-link scrollto" href="#game">Games</a></li>
                    <li><a class="nav-link scrollto" href="#aboutus">About Us</a></li>
                    <li>
                        <a class="nav-link scrollto" href="#testimonials">Reviews</a>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li class="dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Pertemuan</a>
                        <ul>
                            <li><a href="{{ url('/pertemuan1') }}">Pertemuan 1</a></li>
                            <li><a href="{{ url('/pertemuan2') }}">Pertemuan 2</a></li>
                            <li><a href="{{ url('/pertemuan3') }}">Pertemuan 3</a></li>
                            <li><a href="{{ url('/pertemuan4') }}">Pertemuan 4</a></li>
                            <li><a href="{{ url('/pertemuan5') }}">Pertemuan 5</a></li>

                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Tugas</a>
                        <ul>
                            <li><a href="{{ url('/tugas1') }}">Tugas 1</a></li>
                            <li class="dropdown"><a href="#"><span>Tugas 2</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="{{ url('/TIY1') }}">Tugas 2.1</a></li>
                                    <li><a href="{{ url('/TIY2') }}">Tugas 2.2</a></li>
                                    <li><a href="{{ url('/TIY3') }}">Tugas 2.3</a></li>
                                    <li><a href="{{ url('/TIY4') }}">Tugas 2.4</a></li>

                                </ul>
                            </li>
                            <li><a href="{{ url('/tugas3') }}">Tugas 3</a></li>
                            <li><a href="{{ url('/tugas4') }}">Tugas 4</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="getstarted scrollto" href="#game">Get Started</a>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center overlay"
        style="background-image: url(assets/another-one.jpg)">
        >
        <div class="container-fluid" data-aos="fade-up">
            <div class="row justify-content-around">
                <div class="col-5 pt-2 d-flex flex-column justify-content-center">
                    <h1 style="font-size: 50px">Mojiken Studio</h1>
                    <h2 style="font-size: 25px">
                        We provide happiness to our family member, to inspire people, and
                        build a better world to live in
                    </h2>
                    <div>
                        <a href="#game" class="btn-get-started scrollto">More</a>
                    </div>
                </div>
                <div class="col-5 d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="150"></div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="latest" class="latest">
        <div class="container">
            <h1 style="font-weight: bold; color: rgb(16, 16, 173); padding-bottom: 5%">
                <center>Latest News</center>
            </h1>
            <div class="row">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                    <div class="card text-white" style="border: 0">
                        <img class="card-img" src="assets/A-Space-for-the-Unbound-4.jpg" alt="Card image" />
                        <div class="card-img-overlay d-flex flex-column justify-content-end text-hover">
                            <h5 class="card-title">Release Date !</h5>
                            <p class="card-text">
                                Atma and Raya’s coming-of-age story, “A Space for the
                                Unbound”, is releasing next year! Accompanied by gorgeous
                                pixel art, join the two high school sweethearts in their
                                supernatural-filled adventure through late 90s...
                                <a href="https://mojikenstudio.com/" style="text-decoration: none; color: white">Read
                                    More</a>
                            </p>
                            <p class="card-text">Last updated 1 year ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                    <div class="card text-white" style="border: 0">
                        <img class="card-img" src="assets/when-the-past-was-around.png" alt="Card image" />
                        <div class="card-img-overlay d-flex flex-column justify-content-end text-hover">
                            <h5 class="card-title">When the past was around RELEASED !</h5>
                            <p class="card-text">
                                After more than a year of hardwork, good days and bad days,
                                it’s finally here! When the Past was Around is out now on
                                Steam and you can now enjoy the bittersweet story of Eda and
                                Owl...
                                <a href="https://mojikenstudio.com/" style="text-decoration: none; color: white">Read
                                    More</a>
                            </p>
                            <p class="card-text">Last updated 1 year ago</p>
                        </div>
                    </div>
                </div>

                <!-- SECOND ROW -->
                <div class="col-lg-6 pt-4 pt-lg-4 order-2 order-lg-1 content" data-aos="fade-right">
                    <div class="card text-white" style="border: 0">
                        <img class="card-img" src="assets/divination.jpg" alt="Card image" />
                        <div class="card-img-overlay d-flex flex-column justify-content-end text-hover">
                            <h5 class="card-title">Press Kit !</h5>
                            <p class="card-text">
                                “It’s a gorgeous experience with presentation as stark as the
                                subject matter, with eye-popping visuals that draw your
                                attention to, rather than distract from, the rich
                                characterization of every client you encounter...
                                <a href="https://mojikenstudio.com/" style="text-decoration: none; color: white">Read
                                    More</a>
                            </p>
                            <p class="card-text">Last updated 1 year ago</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 pt-4 pt-lg-4 order-2 order-lg-1 content" data-aos="fade-right">
                    <div class="card text-white" style="border: 0">
                        <img class="card-img" src="assets/she-and-the-light-bearer.png" alt="Card image" />
                        <div class="card-img-overlay d-flex flex-column justify-content-end text-hover">
                            <h5 class="card-title">
                                She and The Light Bearer is now available in Japanese
                                Language!
                            </h5>
                            <p class="card-text">
                                Let’s start the adventure with 「ホタル」🔥✨!
                                <a href="https://mojikenstudio.com/post/188488601424/%E3%81%93%E3%82%93%E3%81%AB%E3%81%A1%E3%81%AF-she-and-the-light-bearer-is-now-available#notes"
                                    style="text-decoration: none; color: white">Read More</a>
                            </p>
                            <p class="card-text">Last updated 1 year ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News Section -->

    <!-- ======= Game Explanation Section ======= -->
    <section id="game" class="services section-bg">
        <div class="section-title">
            <h1 style="font-weight: bold">Our Work</h1>
        </div>
        <div class="container p-5" style="background: #313469; border-radius: 15px; color: white" data-aos="fade-up">
            <div class="section-title">
                <h2>A Space For The Unbound</h2>
            </div>

            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
                    <p style="font-size: 20px">
                        A magical adventure about two high school sweethearts set at the
                        end of their school days - and the end of the world. Explore a
                        crumbling town and help friends face their inner demons, which
                        could be the key to stopping reality itself disintegrating. And
                        don’t forget to pet the cats.
                    </p>
                    <a href="https://store.steampowered.com/app/1201270/A_Space_for_the_Unbound/"
                        class="btn-get-started1">Download Now</a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/A-Space-for-the-Unbound-Explain.jpg" alt="" class="img-fluid"
                        style="border-radius: 5%" />
                </div>
            </div>
        </div>

        <div class="container p-5 mt-5" style="background: #b49174; border-radius: 15px; color: white"
            data-aos="fade-up">
            <div class="section-title">
                <h2>When The Past Was Around</h2>
            </div>

            <div class="row">
                <div class="image col-lg-6 order-2 order-lg-1" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/when-the-past-was-around-hero.jpg" alt="" class="img-fluid" />
                </div>
                <div class="col-lg-6 order-1 order-lg-2 d-flex flex-column align-items-lg-center">
                    <p style="font-size: 20px">
                        When the Past was Around is an adventure point-and-click puzzle
                        game about love, moving on, letting go, and the joy and pain of
                        everything in between.
                    </p>
                    <a href="https://store.steampowered.com/app/1164050/When_The_Past_Was_Around/"
                        class="btn-get-started2">Download Now</a>
                </div>
            </div>
        </div>

        <div class="container p-5 mt-5" style="background: #110a26; border-radius: 15px; color: white"
            data-aos="fade-up">
            <div class="section-title">
                <h2>Divination</h2>
            </div>

            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
                    <p style="font-size: 20px">
                        "What if you're born into this world without your permission?"
                        DIVINATION is a very short visual novel where you act as a fortune
                        teller in a futuristic world. Talk and listen to people's stories,
                        then foresee their future using the runes they had drawn.
                    </p>
                    <a href="https://store.steampowered.com/app/1180250/DIVINATION/" class="btn-get-started3">Download
                        Now</a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/divination-hero.jpg" alt="" class="img-fluid" />
                </div>
            </div>
        </div>

        <div class="container p-5 mt-5" style="background: #b49174; border-radius: 15px; color: white"
            data-aos="fade-up">
            <div class="section-title">
                <h2>She and The Light Bearer</h2>
            </div>

            <div class="row">
                <div class="image col-lg-6 order-2 order-lg-1" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/she-and-the-light-bearer-hero.jpg" alt="" class="img-fluid" />
                </div>
                <div class="col-lg-6 order-1 order-lg-2 d-flex flex-column align-items-lg-center">
                    <p style="font-size: 20px">
                        When the Past was Around is an adventure point-and-click puzzle
                        game about love, moving on, letting go, and the joy and pain of
                        everything in between.
                    </p>
                    <a href="https://store.steampowered.com/app/658590/She_and_the_Light_Bearer/"
                        class="btn-get-started2">Download Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Game Explanation Section -->

    <!-- ======= About Us Section ======= -->
    <section id="aboutus" class="aboutus">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>About Us</h2>
                <p>
                    We are an indie game developer studio based in Surabaya, Indonesia.
                    Our team is composed of passionate peoples who believes that fun
                    games can bring positive impact on our lives. Our goal as a game
                    development company is to create video games that push the
                    boundaries with seriously fun craftsmanship to deliver unforgettable
                    experience.
                </p>
            </div>

            <div class="row image order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                <center>
                    <img src="assets/mojiken-studio-about-us.jpg" alt="Mojiken Studio Team" class="img-fluid"
                        style="border-radius: 10px" />
                </center>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Reviews</h2>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                You’re able to pet every single cat you come across (be still,
                                my beating heart!)
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                <img src="assets/game-testi-1.jpg" class="image-fluid img-thumbnail mt-3" />
                            </p>

                            <img src="assets/ign-logo.jpg" class="testimonial-img" alt="" />
                            <h3>IGN</h3>
                            <h4>Video Game Reviewer</h4>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Full of lovely things to poke at and good music to listen to
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                <img src="assets/when-the-past-was-around-review.jpg"
                                    class="image-fluid img-thumbnail mt-3" />
                            </p>

                            <img src="assets/rps.jpg" class="testimonial-img" alt="" />
                            <h3>Rock Paper Shotgun</h3>
                            <h4>British Game Reviewer</h4>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                A slightly fantastical, sweet and whimsical adventure
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                <img src="assets/when-the-past-was-around_3.jpeg"
                                    class="image-fluid img-thumbnail mt-3" />
                            </p>

                            <img src="assets/pc-gamer.png" class="testimonial-img" alt="" />
                            <h3>PC Gamer</h3>
                            <h4>Video Game Journalist</h4>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                A compelling visit to a home I’d like to get to know more
                                about
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                <img src="assets/A-Space-for-the-Unbound-5.jpg"
                                    class="image-fluid img-thumbnail mt-3" />
                            </p>

                            <img src="assets/indie-game-plus.jpg" class="testimonial-img" alt="" />
                            <h3>Indie Game Plus</h3>
                            <h4>Indie Game Developer Community</h4>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Breathtakingly Beautiful
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                <img src="assets/A-Space-for-the-Unbound-6.jpg"
                                    class="image-fluid img-thumbnail mt-3" />
                            </p>

                            <img src="assets/ign-SEA-logo.jpg" class="testimonial-img" alt="" />
                            <h3>IGN South East Asia</h3>
                            <h4>Video Game Reviewer</h4>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Contact</h2>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>Kendangsari, Tenggilis Mejoyo, Surabaya, East Java 60292</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>contact@mojikenstudio.com</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2644654274104!2d112.74241187468984!3d-7.324163272025921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbfe2a527d5d%3A0xa78f9d421edb1f70!2sMojiken%20Studio!5e0!3m2!1sen!2sid!4v1697717774935!5m2!1sen!2sid"
                        frameborder="0" style="border: 0; width: 100%; height: 384px" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6 info-box">
                    <h3>Send Us A Message</h3>
                    <form id="contact-form" data-sb-form-api-token="API_TOKEN">
                        <div class="row mx-3">
                            <div class="form-group">
                                <label class="form-control border-0" style="text-align: left"
                                    name="name">Nama</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">
                                    A name is required.
                                </div>
                            </div>
                        </div>
                        <div class="row mx-3">
                            <div class="form-group mt-2">
                                <label class="form-control border-0" name="email"
                                    style="text-align: left">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">
                                    An email is required.
                                </div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">
                                    Email is not valid.
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-lg-3">
                            <textarea class="form-control" id="message" rows="5" placeholder="Enter Your Message Here" required
                                data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">
                                A message is required.
                            </div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                We Will Contact You Soon
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">
                                Error sending message!
                            </div>
                        </div>
                        <!-- Submit Button-->
                        <div class="text-center">
                            <button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton"
                                type="submit">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Mojiken Studio</h3>
                        <p>
                            Kendangsari, Tenggilis Mejoyo, <br />
                            Surabaya, <br />
                            East Java 60292<br />
                            <strong>Phone:</strong> +1 5589 55488 55<br />
                            <strong>Email:</strong> contact@mojikenstudio.com<br />
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links"></div>

                    <div class="col-lg-3 col-md-6 footer-links"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright-wrap d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="credits"></div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="https://twitter.com/MojikenStudio" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="https://www.facebook.com/mojiken" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/mojiken/" class="instagram"><i
                            class="bx bxl-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/mojiken/" class="linkedin"><i
                            class="bx bxl-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
