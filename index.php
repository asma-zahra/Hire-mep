<?php
require_once('../lib/helper.php');
header_seo_part('Hire MEP Engineers');
?>
<link rel="preload" as="image" href="assets/images/banner-image.jpg">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

<style>
<?php include("assets/css/style.min.css");
?>
</style>
</head>

<body>
    <?php header_navs($white = false); ?>
    <!-- Header end -->

   <!-- Banner section start -->
   <section class="banner">
        <div class="container">
            <div class="banner_content">
                <h1>Project Delays <br/> Keeping You <br/> Up All Night?</h1>
                <h3>Start in Just <span>8 Hours (& Save 70%)</span></h3>
                <button class="btn-primary smoothscroll" data-target="#form">Hire Your Programmer</button>
            </div>
        </div>
    </section> <!-- Banner section end -->




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

    </script>
</body>

</html>