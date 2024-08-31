@extends('frontend.layouts.app')

@section('content')
    <!-- Offcanvas Start-->
    <div class="offcanvas offcanvas-start" id="offcanvasExample">
        <div class="offcanvas-header">
            <!-- Offcanvas Logo Start -->
            <div class="offcanvas-logo">
                <a href="index.html"><img src="assets/images/black logo.jpg" alt=""></a>
            </div>
            <!-- Offcanvas Logo End -->
            <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>
        </div>

        <!-- Offcanvas Body Start -->
        <div class="offcanvas-body">
            <div class="offcanvas-menu">
                <ul class="main-menu">
                    <li class="active-menu">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#about-us">About Us</a>
                    </li>
                    <li>
                        <a href="#choose-us">Service</a>
                    </li>
                    <li>
                        <a href="index-ar" lang="ar">عربي</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Offcanvas Body End -->
    </div>
    <!-- Offcanvas End -->


    <!-- Hero Start -->
    <div class="section techwix-hero-section-03 d-flex align-items-lg-center"
        style="background-image: url(assets/images/bg8.png);">
        <div class="shape-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="944px" height="894px">
                <defs>
                    <linearGradient id="PSgrad_0" x1="88.295%" x2="0%" y1="0%" y2="46.947%">
                        <stop offset="0%" stop-color="rgb(67,186,255)" stop-opacity="1" />
                        <stop offset="100%" stop-color="rgb(113,65,177)" stop-opacity="1" />
                    </linearGradient>

                </defs>
                <path fill-rule="evenodd" fill="rgb(43, 142, 254)"
                    d="M39.612,410.76 L467.344,29.823 C516.51,-13.476 590.638,-9.94 633.939,39.612 L914.192,317.344 C957.492,366.50 953.109,440.638 904.402,483.939 L476.671,864.191 C427.964,907.492 353.376,903.109 310.76,854.402 L29.823,576.670 C-13.477,527.963 -9.94,453.376 39.612,410.76 Z" />
                <path fill="url(#PSgrad_0)"
                    d="M39.612,410.76 L467.344,29.823 C516.51,-13.476 590.638,-9.94 633.939,39.612 L914.192,317.344 C957.492,366.50 953.109,440.638 904.402,483.939 L476.671,864.191 C427.964,907.492 353.376,903.109 310.76,854.402 L29.823,576.670 C-13.477,527.963 -9.94,453.376 39.612,410.76 Z" />
            </svg>
        </div>
        <div class="shape-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="726.5px" height="726.5px">
                <path fill-rule="evenodd" stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="butt"
                    stroke-linejoin="miter" opacity="0.302" fill="none"
                    d="M28.14,285.269 L325.37,21.216 C358.860,-8.852 410.655,-5.808 440.723,28.14 L704.777,325.37 C734.846,358.860 731.802,410.654 697.979,440.723 L400.956,704.777 C367.133,734.845 315.338,731.802 285.269,697.979 L21.216,400.955 C-8.852,367.132 -5.808,315.337 28.14,285.269 Z" />
            </svg>
        </div>
        <div class="shape-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="515px" height="515px">
                <defs>
                    <linearGradient id="PSgrad_0" x1="0%" x2="89.879%" y1="0%" y2="43.837%">
                        <stop offset="0%" stop-color="rgb(67,186,255)" stop-opacity="1" />
                        <stop offset="100%" stop-color="rgb(113,65,177)" stop-opacity="1" />
                    </linearGradient>

                </defs>
                <path fill-rule="evenodd" fill="rgb(43, 142, 254)"
                    d="M19.529,202.281 L230.531,14.699 C254.559,-6.660 291.353,-4.498 312.714,19.529 L500.295,230.531 C521.656,254.559 519.493,291.353 495.466,312.714 L284.463,500.295 C260.436,521.656 223.641,519.493 202.281,495.466 L14.699,284.463 C-6.660,260.435 -4.498,223.641 19.529,202.281 Z" />
                <path fill="url(#PSgrad_0)"
                    d="M19.529,202.281 L230.531,14.699 C254.559,-6.660 291.353,-4.498 312.714,19.529 L500.295,230.531 C521.656,254.559 519.493,291.353 495.466,312.714 L284.463,500.295 C260.436,521.656 223.641,519.493 202.281,495.466 L14.699,284.463 C-6.660,260.435 -4.498,223.641 19.529,202.281 Z" />
            </svg>
        </div>
        <div class="shape-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="972.5px" height="970.5px">
                <path fill-rule="evenodd" stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="butt"
                    stroke-linejoin="miter" fill="none"
                    d="M38.245,381.103 L435.258,28.158 C480.467,-12.32 549.697,-7.964 589.888,37.244 L942.832,434.257 C983.23,479.466 978.955,548.697 933.746,588.888 L536.733,941.832 C491.524,982.23 422.293,977.955 382.103,932.746 L29.158,535.733 C-11.32,490.524 -6.963,421.293 38.245,381.103 Z" />
            </svg>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <h3 class="sub-title" data-aos-delay="600" data-aos="fade-up">Technology Releted
                            Consultancy</h3>
                        <h2 class="title" data-aos="fade-up" data-aos-delay="800">We transform ideas into
                            technology</h2>
                        <p data-aos="fade-up" data-aos-delay="900">We provide the most responsive and functional
                            IT design for companies and businesses worldwide.</p>
                        <div class="hero-btn" data-aos="fade-up" data-aos-delay="1000">
                            <a class="btn" href="#more">Read More</a>
                        </div>
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Service Start -->
    <div class="section techwix-service-section-03" style="background-image: url(assets/images/bg/service-bg3.jpg);">
        <div class="container">
            <!-- Service Wrap Start -->
            <div class="service-wrap-03">
                <div class="row">
                    @forelse ($departments as $department)
                        <div class="col-xl-3 col-md-6">
                            <!-- Service Item Start -->
                            <div class="service-item-03">
                                <div class="service-img">
                                    <img src="assets/images/ser-icon9.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="title"><a
                                            href="{{ route('department.show', $department->slug) }}">{{ $department->name }}
                                        </a></h3>
                                    <p>{!! $department->description !!}</p>
                                </div>
                            </div>
                            <!-- Service Item End -->
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
            <!-- Service Wrap End -->
        </div>
    </div>
    <!-- Service End -->

    <!-- About Start -->
    <div class="section techwix-about-section-04 section-padding" id="about-us">
        <div class="shape-1"></div>
        <div class="container">
            <!-- About Wrapper Start -->
            <div class="about-wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- About Content Wrap Start -->
                        <div class="about-content-wrap">
                            <div class="section-title">
                                <h3 class="sub-title">Who we are</h3>
                                <h2 class="title">Highly Tailored IT Design, Management & Support Services.</h2>
                            </div>
                            <p class="text">Accelerate innovation with world-class tech teams We’ll match you to
                                an entire remote team of incredible freelance talent for all your software
                                development needs.</p>
                            <!-- About Author Info Wrap Start -->
                            <div class="about-author-info-wrap">
                                <div class="about-author">
                                    <h3 class="name">Ahmed Nafea</h3>
                                    <span class="designation">CEO, InomTechs</span>
                                </div>
                                <div class="about-info">
                                    <p>Call to ask any question </p>
                                    <h3 class="number">+20 155 678 3315</h3>
                                </div>
                            </div>
                            <!-- About Author Info Wrap End -->
                        </div>
                        <!-- About Content Wrap End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- About Image Wrap Start -->
                        <div class="about-img-wrap">

                            <div class="about-img about-img-big">
                                <img src="assets/images/about-big2.jpg" alt="">
                            </div>
                            <div class="about-img about-img-sm">
                                <img src="assets/images/about-sm2.jpg" alt="">
                            </div>
                        </div>
                        <!-- About Image Wrap End -->
                    </div>
                </div>
            </div>
            <!-- About Wrapper End -->
        </div>
    </div>
    <!-- About End -->

    <!-- Counter Start -->
    <div class="section techwix-counter-section-02">
        <div class="container">
            <div class="counter-wrap">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- Single Counter Start -->
                        <div class="single-counter">
                            <div class="counter-img">
                                <img src="assets/images/counter-1.png" alt="">
                            </div>
                            <div class="counter-content">
                                <span class="counter">90</span>
                                <p>Happy clients</p>
                            </div>
                        </div>
                        <!-- Single Counter End -->
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <!-- Single Counter Start -->
                        <div class="single-counter">
                            <div class="counter-img">
                                <img src="assets/images/counter-2.png" alt="">
                            </div>
                            <div class="counter-content">
                                <span class="counter">50</span>
                                <p>Finished projects</p>
                            </div>
                        </div>
                        <!-- Single Counter End -->
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <!-- Single Counter Start -->
                        <div class="single-counter">
                            <div class="counter-img">
                                <img src="assets/images/counter-3.png" alt="">
                            </div>
                            <div class="counter-content">
                                <span class="counter">200</span>
                                <p>Skilled Experts</p>
                            </div>
                        </div>
                        <!-- Single Counter End -->
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <!-- Single Counter Start -->
                        <div class="single-counter single-counter-4">
                            <div class="counter-img">
                                <img src="assets/images/counter-1.png" alt="">
                            </div>
                            <div class="counter-content">
                                <span class="counter">+600</span>
                                <p>Media Posts</p>
                            </div>
                        </div>
                        <!-- Single Counter End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter End -->

    <!-- Choose Us Start -->
    <div class="section techwix-choose-us-section techwix-choose-us-section-04 section-padding" id="choose-us">
        <div class="container">
            <!-- Choose Us Wrap Start -->
            <div class="choose-us-wrap">
                <div class="choose-us-content-wrap">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <!-- Choose Us Item Start -->
                            <div class="choose-us-item-02">
                                <div class="choose-us-img">
                                    <img src="assets/images/360-development.jpg" alt=""
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div class="choose-us-content">
                                    <h3 class="title"><a href="#">IT Consultancy</a></h3>
                                    <p>IT consultancy provides expert advice in managing technology to meet business
                                        goals. Consultants analyze systems, recommend improvements, and implement
                                        solutions, covering areas like cybersecurity, software development, and
                                        network infrastructure for optimized business efficiency and growth.</p>
                                </div>
                            </div>
                            <!-- Choose Us Item End -->
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <!-- Choose Us Item Start -->
                            <div class="choose-us-item-02">
                                <div class="choose-us-img">
                                    <img src="assets/images/e-commerce.JPG" alt="">
                                </div>
                                <div class="choose-us-content">
                                    <h3 class="title"><a href="#">E-Commerce</a></h3>
                                    <p>E-commerce, short for electronic commerce, refers to the buying and selling
                                        of goods or services over the internet. It involves online transactions,
                                        electronic payments, and digital platforms where businesses and consumers
                                        can engage in buying and selling activities, often facilitated through
                                        websites and mobile applications.</p>
                                </div>
                            </div>
                            <!-- Choose Us Item End -->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <!-- Choose Us Item Start -->
                            <div class="choose-us-item-02">
                                <div class="choose-us-img">
                                    <img src="assets/images/seo.jpg "alt="">
                                </div>
                                <div class="choose-us-content">
                                    <h3 class="title"><a href="#">SEO Services</a></h3>
                                    <p>SEO (Search Engine Optimization) services focus on optimizing websites to
                                        improve their visibility on search engines. This involves keyword research,
                                        on-page and off-page optimization, content creation, and other strategies to
                                        enhance organic search rankings and drive targeted traffic to the website.
                                    </p>
                                </div>
                            </div>
                            <!-- Choose Us Item End -->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <!-- Choose Us Item Start -->
                            <div class="choose-us-item-02">
                                <div class="choose-us-img">
                                    <img src="assets/images/web-development.jpg" alt="">
                                </div>
                                <div class="choose-us-content">
                                    <h3 class="title"><a href="#">Web development</a></h3>
                                    <p>Web development service is the process of building and developing websites
                                        and web applications that work over the Internet. Our web development
                                        service aims to create websites and web applications with excellent
                                        functionality, performance, and effective user experience</p>
                                </div>
                            </div>
                            <!-- Choose Us Item End -->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <!-- Choose Us Item Start -->
                            <div class="choose-us-item-02">
                                <div class="choose-us-img">
                                    <img src="assets/images/mobile-applications.jpg" alt="">
                                </div>
                                <div class="choose-us-content">
                                    <h3 class="title"><a href="#">Mobile application </a></h3>
                                    <p>Mobile app servicing is the process of designing and developing applications
                                        that run on mobile devices such as smartphones and tablets. The mobile
                                        application service aims to provide a comfortable, smooth and integrated
                                        user experience for users on mobile devices</p>
                                </div>
                            </div>
                            <!-- Choose Us Item End -->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <!-- Choose Us Item Start -->
                            <div class="choose-us-item-02">
                                <div class="choose-us-img">
                                    <img src="assets/images/marketing.jpg" alt="">
                                </div>
                                <div class="choose-us-content">
                                    <h3 class="title"><a href="#">Digital marketing Services</a></h3>
                                    <p>E-marketing service is the use of digital media and electronic platforms to
                                        promote and market products and services. This service aims to increase
                                        awareness and spread of a specific brand, and increase sales and potential
                                        customers..</p>
                                </div>
                            </div>
                            <!-- Choose Us Item End -->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <!-- Choose Us Item Start -->
                            <div class="choose-us-item-02">
                                <div class="choose-us-img">
                                    <img src="assets/images/bussiness.jpg" alt="">
                                </div>
                                <div class="choose-us-content">
                                    <h3 class="title"><a href="#">Business Development </a></h3>
                                    <p>Business development involves creating growth opportunities for a company. It
                                        includes identifying strategic partnerships, expanding market presence,
                                        acquiring new customers, and developing innovative products or services. The
                                        goal is to enhance revenue, market share, and overall business performance.
                                    </p>
                                </div>
                            </div>
                            <!-- Choose Us Item End -->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <!-- Choose Us Item Start -->
                            <div class="choose-us-item-02">
                                <div class="choose-us-img">
                                    <img src="assets/images/designer.jpg" alt="">
                                </div>
                                <div class="choose-us-content">
                                    <h3 class="title"><a href="#">Designing Services</a></h3>
                                    <p>
                                        Designer services encompass a range of creative professions, including
                                        graphic design, web design, and user experience (UX) design. Designers use
                                        their artistic and technical skills to create visually appealing and
                                        functional solutions, such as logos, websites, and user interfaces, tailored
                                        to meet clients' needs.





                                    </p>
                                </div>
                            </div>
                            <!-- Choose Us Item End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Choose Us Wrap End -->
        </div>
    </div>
    <!-- Choose Us End -->

    <!-- Skill Start -->
    <div class="section techwix-skill-section-02 section-padding">
        <div class="container">
            <div class="skill-wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Skill Left Start -->
                        <div class="skill-left">
                            <div class="section-title">
                                <h2 class="title">Preparing for your success, we provide truly prominent IT
                                    solutions</h2>
                            </div>
                            <div class="experience-wrap">
                                <div class="experience">
                                    <h2 class="number">+3</h2>
                                    <span>Years of <br> experience</span>
                                </div>
                                <div class="experience-text">
                                    <p>Accelerate innovation with world-class tech teams We’ll match you to an
                                        entire remote team of incredible freelance talent for all your software
                                        development needs.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Skill Left End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Skill Right Start -->
                        <div class="skill-right">
                            <div class="counter-bar">
                                <!-- Skill Item Start -->
                                <div class="skill-item">
                                    <span class="title">Web development</span>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line color-1" data-width="80">
                                                <span class="skill-percent"><span class="counter">80</span>%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Skill Item End -->
                                <!-- Skill Item Start -->
                                <div class="skill-item">
                                    <span class="title">Mobile application</span>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line color-1" data-width="95">
                                                <span class="skill-percent"><span class="counter">95</span>%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Skill Item End -->
                                <!-- Skill Item Start -->
                                <div class="skill-item">
                                    <span class="title">Digital marketing Services</span>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line color-1" data-width="80">
                                                <span class="skill-percent"><span class="counter">80</span>%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Skill Item End -->
                                <!-- Skill Item Start -->
                                <div class="skill-item">
                                    <span class="title">Technology Consultant</span>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line color-1" data-width="90">
                                                <span class="skill-percent"><span class="counter">90</span>%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Skill Item End -->
                            </div>
                        </div>
                        <!-- Skill Right End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skill End -->


    <!-- Cta Start -->
    <div class="section techwix-cta-section-02">
        <div class="container">
            <!-- Cta Wrap Start -->
            <div class="cta-wrap" style="background-image: url(assets/images/bg/cta-bg.jpg);">
                <div class="row align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <!-- Cta Content Start -->
                        <div class="cta-content">
                            <div class="cta-icon">
                                <img src="assets/images/cta-icon2.png" alt="">
                            </div>
                            <p>We’re Delivering the best customer Experience</p>
                        </div>
                        <!-- Cta Content End -->
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <!-- Cta Button Start -->
                        <div class="cta-btn">
                            <a class="btn btn-white" href="https://wa.me/+201556783315">+20 155 678 3315</a>
                        </div>
                        <!-- Cta Button End -->
                    </div>
                </div>
            </div>
            <!-- Cta Wrap End -->
        </div>
    </div>
    <!-- Cta End -->
@endSection
