<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About College</title>
    <!-- Css -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="shortcut icon" href="/img/logo/logo.png" type="image/x-icon">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Scroll animation  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<style>
    .about-text{
        box-shadow: 10px 10px 20px #333;
    }

    .about-text h2{
        font-size: 2.5rem;
        font-weight: 700;
    }
    .about-section{
        margin-top: -15%;
    }
</style>
<body>

    <!-- Header Section start -->
    <?php
    // Include the header.php file
    require_once 'header.php';
    ?>
    <!-- Header Section end -->

    <!-- Main Section Start -->
        <div class="row">
            <div class="col-sm-12">
                <img src="/img/Banner/sliderc1.PNG" data-aos="zoom-out" class="w-100 h-50" alt="">
            </div>
        </div>

    <div class="container  mb-5 about-section">
        <div class="row" data-aos="zoom-in">
            <div class="col-sm-6 about-img">
                <img src="/img/about/about2.jpg" class="w-100 h-75" alt="about pic">
            </div>
            <div class="col-sm-6 about-text">
                <h2 class="">HLS Inter College</h2>
                <p>An Affiliated to HLS Inter College, Devmanpur, Ghatampur   is a private un-aided affiliated college in Kanpur Nagar, Kanpur in the state Uttat Paradash. HLS Inter College was established in the year 2010 . The college is co-educational by its nature. The college has a sum of 7.5 acres of land and the college premises is build within 1110 square meters. The institution, having state-of-the-art infrastructure and committed to quality and excellence.Further the institution strives its students to be highly competitive at the global level and thereby, make them proud citizens of the country. The institution imparts education in the field of Business Administration/Management, Commerce, Computer Sciences and Information Technology.</p>
            </div>
        </div>
    </div>
    <!-- Main Section end -->



    <!-- Footer Section start -->
    <?php
    // Include the header.php file
    require_once 'footer.php';
    ?>
    <!-- Footer Section end -->


    <!-- Scroll Animation -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 1000,
        });
    </script>

    <!-- Scroll Animation -->

    <!-- Js -->
    <script src="/js/bootstrap.bundle.js"></script>
</body>

</html>