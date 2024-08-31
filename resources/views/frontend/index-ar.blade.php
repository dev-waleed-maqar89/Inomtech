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
                        <a href="#">الرئيسية</a>
                    </li>
                    <li>
                        <a href="#about-us">من نحن</a>
                    </li>
                    <li>
                        <a href="#choose-us">منتجاتنا</a>
                    </li>
                    <li>
                        <a href="index" lang="ar">EN</a>
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
                        <h3 class="sub-title" data-aos-delay="600" data-aos="fade-up">استشارات تكنولوجيا ذات صلة
                        </h3>
                        <h2 class="title" data-aos="fade-up" data-aos-delay="800">نحن نحول الأفكار إلى تكنولوجيا
                        </h2>
                        <p data-aos="fade-up" data-aos-delay="900">نقدم أكثر تصاميم تكنولوجيا استجابةً ووظيفية
                            للشركات والأعمال في جميع أنحاء العالم.</p>

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
                                    <h3 class="title"><a href="service.html">{{ $department->name }} </a></h3>
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
                                <h3 class="sub-title">من نحن</h3>
                                <h2 class="title">نهتم بتقديد خدمات عالية الجودة ولها قيمة فعالة
                                </h2>
                            </div>
                            <p class="text">
                                نحن شركة متخصصة منذ عام 2020 في تصميم المواقع والتطبيقات وتصاميم الهوية التجارية حيث
                                لدينا فريق يتكون من مهندسي ومصممين برمجيات محترفين مع خبرة كبيرة وتقديم خدمات متفوقة
                                ومتقنة في تنفيذها .
                            </p>
                            <!-- About Author Info Wrap Start -->
                            <div class="about-author-info-wrap">
                                <div class="about-author">
                                    <h3 class="name">Ahmed Nafea</h3>
                                    <span class="designation">CEO, InomTechs</span>
                                </div>
                                <div class="about-info">
                                    <p>تواصل معنا لاى استفسار </p>
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
    <div class="section techwix-choose-us-section section-padding"
        style="background-image: url(assets/images/bg/choose-us-bg.jpg);">
        <div class="container">
            <!-- Choose Us Wrap Start -->
            <div class="choose-us-wrap">
                <div class="section-title text-center">
                    <h3 class="sub-title">لماذا نحن</h3>
                    <h2 class="title">نحن نقدم حلاً بارزاً للويب.</h2>
                </div>
                <div class="choose-us-content-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- Choose Us Item Start -->
                            <div class="choose-us-item">
                                <div class="choose-us-img">
                                    <a href="choose-us.html"><img src="assets/images/seo.jpg" alt=""></a>
                                    <div class="choose-us-content">
                                        <h3 class="title">SEO </h3>






                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Choose Us Item End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Choose Us Item Start -->
                            <div class="choose-us-item">
                                <div class="choose-us-img">
                                    <a href="choose-us.html"><img src="assets/images/ui&ux.jpg" alt=""></a>
                                    <div class="choose-us-content">
                                        <h3 class="title">UI&UX Design</h3>






                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Choose Us Item End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Choose Us Item Start -->
                            <div class="choose-us-item">
                                <div class="choose-us-img">
                                    <a href="choose-us.html"><img src="assets/images/e-commerce.JPG" alt=""></a>
                                    <div class="choose-us-content">
                                        <h3 class="title">E-Commerce</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Choose Us Item End -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="more-choose-content text-center">
                                <p>Learn more about <a href="service.html">More reason <i
                                            class="fas fa-long-arrow-alt-right"></i></a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Choose Us Wrap End -->
        </div>
    </div>
    <!-- Choose Us End -->
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
                                    <p>تقدم استشارات تكنولوجيا المعلومات نصائح خبراء في إدارة التكنولوجيا لتحقيق
                                        أهداف الأعمال. يقوم الاستشاريون بتحليل الأنظمة وتوصية بتحسينها وتنفيذ
                                        الحلول، مغطين مجالات مثل أمان المعلومات، تطوير البرمجيات، وبنية الشبكة
                                        لتحقيق كفاءة الأعمال المحسّنة والنمو.</p>
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
                                    <p>التجارة الإلكترونية، والتي تعني التجارة الإلكترونية، تشير إلى شراء وبيع السلع
                                        أو الخدمات عبر الإنترنت. تتضمن عمليات الشراء والبيع عبر الإنترنت والدفع
                                        الإلكتروني والمنصات الرقمية حيث يمكن للشركات والمستهلكين القيام بأنشطة
                                        الشراء والبيع، وغالبًا ما يتم تسهيلها من خلال مواقع الويب وتطبيقات الهواتف
                                        المحمولة.</p>
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
                                    <p>تركز خدمات تحسين محركات البحث (SEO) على تحسين مواقع الويب لزيادة رؤيتها على
                                        محركات البحث. يتضمن ذلك أبحاث الكلمات الرئيسية، وتحسين الصفحة والتحسين خارج
                                        الصفحة، وإنشاء المحتوى، واعتماد استراتيجيات أخرى لتعزيز تصنيفات البحث العضوي
                                        وجذب حركة مستهدفة إلى الموقع الإلكتروني.</p>
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
                                    <p>خدمة تطوير الويب هي عملية بناء وتطوير مواقع الويب وتطبيقات الويب التي تعمل
                                        عبر الإنترنت. تهدف خدمتنا في تطوير الويب إلى إنشاء مواقع وتطبيقات ويب بوظائف
                                        ممتازة وأداء عالي وتجربة مستخدم فعّالة.</p>
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
                                    <p>خدمة صيانة التطبيقات النقالة هي عملية تصميم وتطوير التطبيقات التي تعمل على
                                        أجهزة الهاتف المحمول مثل الهواتف الذكية والأجهزة اللوحية. تهدف خدمة تطبيقات
                                        الهاتف المحمول إلى توفير تجربة مستخدم مريحة وسلسة ومتكاملة للمستخدمين على
                                        الأجهزة المحمولة.</p>
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
                                    <p>خدمة التسويق الإلكتروني هي استخدام وسائط رقمية ومنصات إلكترونية للترويج
                                        وتسويق المنتجات والخدمات. تهدف هذه الخدمة إلى زيادة الوعي ونشر العلامة
                                        التجارية الخاصة بمنتج معين، وزيادة المبيعات وعدد العملاء المحتملين.</p>
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
                                    <p>تطوير الأعمال يشمل إيجاد فرص نمو للشركة. يتضمن ذلك تحديد شراكات استراتيجية،
                                        توسيع الوجود في السوق، الحصول على عملاء جدد، وتطوير منتجات أو خدمات مبتكرة.
                                        الهدف هو تعزيز الإيرادات وحصة السوق وأداء الأعمال بشكل عام.</p>
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
                                        خدمات التصميم تشمل مجموعة من المهن الإبداعية، بما في ذلك تصميم الجرافيك،
                                        تصميم الويب، وتصميم تجربة المستخدم (UX). يستخدم المصممون مهاراتهم الفنية
                                        والتقنية لإنشاء حلول بصرية جذابة ووظيفية، مثل الشعارات والمواقع وواجهات
                                        المستخدم، مصممة لتلبية احتياجات العملاء.
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
    <!-- Skill Start -->

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
                            <p>نحن نقدم أفضل تجربة للعملاء</p>
                        </div>
                        <!-- Cta Content End -->
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <!-- Cta Button Start -->
                        <div class="cta-btn">

                            <div class="cta-btn">
                                <a class="btn btn-white" href="https://wa.me/+201556783315">+20 155 678 3315</a>
                            </div>
                        </div>
                        <!-- Cta Button End -->
                    </div>
                </div>
            </div>
            <!-- Cta Wrap End -->
        </div>
    </div>
    <!-- Cta End -->
@endsection
