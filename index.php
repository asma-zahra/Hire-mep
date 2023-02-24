<?php
require_once('../lib/helper.php');
header_seo_part('Hire MEP Engineers');
?>
<link rel="preload" as="image" href="assets/images/banner-image.jpg">
<!-- Sapline Sans -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
<style>
<?php include("assets/css/style.min.css");
?>
</style>
</head>

<body>
    <?php header_navs($white = false); ?>
    <!-- Header end -->

    <!-- Banner section start -->
    <div class="banner_bg"></div>
    <section class="banner">
        <div class=" container">
            <div class="banner_content text_center">
                <h3>Build <span> Safe & Energy-sufficient </span> Structures</h3>
                <h1>That Fits Your Goal</h1>
                <button class="btn-primary smoothscroll" data-target="#form">Hire MEP Engineers</button>
                <span class="arrow"></span>
            </div>
        </div>
    </section>
    <div class="inner_container">
        <div id="comparison">
            <figure>
                <div id="handle"></div>
                <div id="divisor"></div>
            </figure>
            <input type="range" min="0" max="100" value="50" id="slider" oninput="moveDivisor()">
        </div>
    </div>
    <!-- Banner section end -->

    <!-- Service slider -->
    <section class="service">
        <div class="service_bg"></div>
        <div class="container">
            <h2>Solve MEP Challenges</h2>
            <h4>With Technology-enabled Solutions</h4>
        </div>
        <div class="inner_container service_slider owl-carousel">
            <div class="item">
                <div class="left_image" >
                    <img src="assets/images/service1.jpg" alt="service" width="665" height="596">
                </div>
                <div class="right_content">
                    <h5>When sustainability<br> comes first</h5>
                    <div class="inner_content">
                        <p>Rely on AI design to build resilient, all-weather structures. Experience design that connects places, people, & the environment.</p>
                        <button class="btn-outline-primary smoothscroll" data-target="#form">Get Started</button>

                    </div>
                </div>

            </div>

            <div class="item">
                <div class="left_image" >
                    <img src="assets/images/service-2.jpg" alt="service" width="665" height="596">
                </div>
                <div class="right_content">
                    <h5>When performance <br> is the key</h5>
                    <div class="inner_content">
                        <p>Integrate your building with a functional HVAC system powered by the Internet of Things (IoT).</p>
                        <button class="btn-outline-primary smoothscroll" data-target="#form">Get Started</button>

                    </div>
                </div>

            </div>
        </div>


    </section>
    <!-- Service slider ends -->

    <!-- Resource slider -->
    <section class="resource_section">
        <div class="container">
            <h2 class="text_center">Meet Our Net-Zero Heroes</h2>
            <h4 class="text_center">Choose the Experts You Need. Get the Results You Want.</h4>

            <div class=" resource_slider owl-carousel">
            <div class="item">
                <div class="left_image" >
                    <img src="assets/images/resource1.jpg" alt="service" width="400" height="500">
                </div>
                <div class="right_content">
                    <h5>Priya Ahuja</h5>
                    <span>MEP Design Engineer</span>
                    <div class="inner_content">
                        <p>Rely on AI design to build resilient, all-weather structures. Experience design that connects places, people, & the environment.</p>
                        <button class="btn-outline-primary">Hire Priya</button>

                    </div>
                </div>

            </div>

            <div class="item">
                <div class="left_image" >
                    <img src="assets/images/resource2.jpg" alt="service" width="400" height="500">
                </div>
                <div class="right_content">
                    <h5>Kunal Datta</h5>
                    <span>Senior Structural Engineer</span>
                    <div class="inner_content">
                        <p>I lead the MEP team and together we can help you create more cost-effective and sustainable built environments through the most reliable MEP engineering company.</p>
                        <button class="btn-outline-primary ">Hire Kunal</button>

                    </div>
                </div>

            </div>
            <div class="item">
                <div class="left_image" >
                    <img src="assets/images/resource3.jpg" alt="service" width="400" height="500">
                </div>
                <div class="right_content">
                    <h5>Sheetal Kulkarni</h5>
                    <span>Mechanical Electrical Plumbing Engineer</span>
                    <div class="inner_content">
                        <p>From the “Big Idea” to the finest detail – I’ll convert your Power Distribution System design with 100% accuracy. Work with me to get better and faster MEP engineering design services for your building.</p>
                        <button class="btn-outline-primary " >Hire Sheetal</button>

                    </div>
                </div>

            </div>

        </div>

        </div>

    </section>

    <!-- Resource slider ends-->






    <?php footer_seo_part(); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <script>
    // Header fixed on scroll start 
    window.onscroll = function() {
        myFunction()
    };
    var header = document.getElementById("mainheader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("fixed-top-menu");

        } else {
            header.classList.remove("fixed-top-menu");
        }
    }

    function toggleDropdown() {
        $("#dropdown").toggle();
        $('.dropdownoverlay').addClass('active');
    }


    /////////////////////////////////////////////////////////////////////
    ///////////////////////// STEPS JS START HERE////////////////////////

    $(document).ready(function() {
        $('.smoothscroll').click(function() {
            var to = $(this).attr('data-target');
            $('html,body').animate({
                    scrollTop: $(to).offset().top - 20
                },
                'slow');
            return false;
        });

        $('.dropdownoverlay').click(function() {
            $(this).removeClass('active');
            $(".dropdown-menu").toggle();
        });





        $('.smoothscroll').click(function() {
            // evt.preventDefault();
            var to = $(this).attr('data-target');

            $('html,body').animate({
                    scrollTop: $(to).offset().top - 20
                },
                'slow');
            return false;
        });
    });

    $(".service_slider").owlCarousel({
            loop: true,
            items: 1,
            margin: 0,
            nav: true,
            navText: ["<i class='icons left-arrow-icon'></i>", "<i class='icons left-arrow-icon'></i>"],
            dots: false,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },

                1000: {
                    items: 1,
                },
            },
        });

        $(".resource_slider").owlCarousel({
            loop: true,
            items: 1,
            margin: 0,
            nav: true,
            navText: ["<i class='icons right-arrow-icon'></i>", "<i class='icons right-arrow-icon'></i>"],
            dots: false,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },

                1000: {
                    items: 1,
                },
            },
        });



    var divisor = document.getElementById("divisor"),
        handle = document.getElementById("handle"),
        slider = document.getElementById("slider");

    function moveDivisor() {
        // handle.style.left = slider.value + "%";
        divisor.style.width = slider.value + "%";
    }

    window.onload = function() {
        moveDivisor();
    };
    </script>
</body>

</html>