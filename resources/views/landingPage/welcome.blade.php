<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SoftLand Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/landingPage/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/landingPage/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/landingPage/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset("assets/landingPage/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset('assets/landingPage/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/landingPage/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/landingPage/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/landingPage/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1><a href="">Marabunta Money</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active " href="#">Dashboard</a></li>
                    <li><a href="">Features</a></li>
                    <li><a href="">Pricing</a></li>
                    <li><a href="">Blog</a></li>

                    <li><a href="{{route('login')}}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section class="hero-section" id="hero">

        <div class="wave">

            <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path
                            d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                            id="Path"></path>
                    </g>
                </g>
            </svg>

        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 hero-text-image">
                    <div class="row">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 data-aos="fade-right">Website Pencatatan Keuangan</h1>
                            <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Marabunta Money is a user-friendly online platform designed to help individuals and businesses manage their finances efficiently.
                            The website offers a range of tools for budgeting, expense tracking, and financial planning. Users can easily record and categorize their income and expenditures, generate detailed
                 f          inancial reports, and set personal or business financial goals.</p>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a
                                    href="{{ route('register') }}" class="btn btn-outline-white">Get started</a></p>
                        </div>
                        <div class="col-lg-4 iphone-wrap">
                            <img src="{{asset('assets/landingPage/img/phone_1.png')}}" alt="Image" class="phone-1" data-aos="fade-right">
                            <img src="{{asset('assets/landingPage/img/phone_2.png')}}" alt="Image" class="phone-2" data-aos="fade-right"
                                data-aos-delay="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Dashboard Section ======= -->
        <section class="section">
            <div class="container">

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-5" data-aos="fade-up">
                        <h2 class="section-heading">makes it easier to manage finances using Marabunta Money</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
                        <div class="feature-1 text-center">
                        <div class="wrap-icon icon-1">
                            <i class="bi bi-bank"></i>
                        </div>
                        <h3 class="mb-3">Expense and Income Tracking</h3>
                        <p>Log daily transactions with ease.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                        <div class="wrap-icon icon-1">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <h3 class="mb-3">Budgeting Tools</h3>
                        <p>Create and manage budgets to monitor spending.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-1 text-center">
                        <div class="wrap-icon icon-1">
                            <i class="bi bi-bar-chart"></i>
                        </div>
                        <h3 class="mb-3">Financial Reports</h3>
                        <p>Generate comprehensive reports to analyze financial health.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">

            <div class="container">
                <div class="row justify-content-center text-center mb-5" data-aos="fade">
                    <div class="col-md-6 mb-5">
                        <img src="{{asset('assets/landingPage/img/undraw_svg_1.svg')}}" alt="Image" class="img-fluid">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="step">
                        <span class="number">01</span>
                        <h3>Sign Up</h3>
                        <p>Start your journey towards better financial management by clicking the "Sign Up" button. Enter your email, create a secure strong password, and confirm the password to get started.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step">
                        <span class="number">02</span>
                        <h3>Create Profile</h3>
                        <p>If you don't have an account, you will be directed to the registration page. Fill in your personal information such as email address, and secure password. After that, click "Register" to create your new account.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step">
                        <span class="number">03</span>
                        <h3>Enjoy the app</h3>
                        <p>Once registration is complete, you can immediately enjoy all FinanceTrack features. Enjoy an intuitive user experience and tools designed to help you achieve your financial goals.</p>
                        </div>
                    </div>
                    </div>
                </div>

        </section>

        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 me-auto">
                        <h2 class="mb-4">Seamlessly Communicate</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at
                            reprehenderit optio,
                            laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit
                            incidunt
                            dolore mollitia esse natus beatae.</p>
                        <p><a href="#" class="btn btn-primary">Download Now</a></p>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <img src="{{asset('assets/landingPage/img/undraw_svg_2.svg')}}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 ms-auto order-2">
                        <h2 class="mb-4">Gather Feedback</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at
                            reprehenderit optio,
                            laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit
                            incidunt
                            dolore mollitia esse natus beatae.</p>
                        <p><a href="#" class="btn btn-primary">Download Now</a></p>
                    </div>
                    <div class="col-md-6" data-aos="fade-right">
                        <img src="{{asset('assets/landingPage/img/undraw_svg_3.svg')}}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= CTA Section ======= -->
        <section class="section cta-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
                        <h2>Starts Publishing Your Apps</h2>
                    </div>
                    <div class="col-md-5 text-center text-md-end">
                        <p><a href="#" class="btn d-inline-flex align-items-center"><i
                                    class="bx bxl-apple"></i><span>App store</span></a> <a href="#"
                                class="btn d-inline-flex align-items-center"><i
                                    class="bx bxl-play-store"></i><span>Google play</span></a></p>
                    </div>
                </div>
            </div>
        </section><!-- End CTA Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h3>About Marabunta Money</h3>
                    <p>Marabunta Money is a user-friendly online platform designed to help individuals and businesses manage their finances efficiently.
                    The website offers a range of tools for budgeting, expense tracking, and financial planning. Users can easily record and categorize their income and expenditures,
                    generate detailed financial reports, and set personal or business financial goals.</p>
                    <p class="social">
                        <a href="#"><span class="bi bi-twitter"></span></a>
                        <a href="#"><span class="bi bi-facebook"></span></a>
                        <a href="#"><span class="bi bi-instagram"></span></a>
                        <a href="#"><span class="bi bi-linkedin"></span></a>
                    </p>
                </div>
                <div class="col-md-7 ms-auto">
                    <div class="row site-section pt-0">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Navigation</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Services</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Collaboration</a></li>
                                <li><a href="#">Todos</a></li>
                                <li><a href="#">Events</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Downloads</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Get from the App Store</a></li>
                                <li><a href="#">Get from the Play Store</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center text-center">
                <div class="col-md-7">
                    <p class="copyright">&copy; Copyright Marabunta Money. All Rights Reserved</p>
                </div>
            </div>

        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/landingPage/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/landingPage/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/landingPage/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/landingPage/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/landingPage/js/main.js')}}"></script>

</body>

</html>
