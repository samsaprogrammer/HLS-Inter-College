<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Css -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="shortcut icon" href="/img/logo/logo.png" type="image/x-icon">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Scroll animation  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    .first-row {
        margin-top: -30%;
    }

    .card-title i {
        font-size: 8rem;
        color: #04014a;
    }

    .card{
        box-shadow: 5px 5px 10px #333;
    }

    .card:hover {
        /* border: 1px solid #04014a; */
        transform: scale(1.05);
    }

    .card:active {
        transform: scale(0.95) rotateZ(1.7deg);
    }

    .card-text{
        font-weight: 700;
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

    <div class="container">
        <div class="row first-row">
            <div class="col-sm-12">
                <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.171108459833!2d80.23055857468243!3d26.12596337712488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c571fe907926b%3A0x4197071da7d94592!2sHLS%20Inter%20College%20Ghatampur%20Kanpur!5e0!3m2!1sen!2sin!4v1713435808066!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="row mb-5 mt-5">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><i class="fa-solid fa-phone fa-spin-pulse"></i></h5>
                        <p class="card-text mt-4">Mobile no - +91 7303729955</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><i class="fa-sharp fa-solid fa-location-dot fa-bounce"></i></h5>
                        <p class="card-text">At & Post- Devmanpur, Dist-Kanpur nagar, Uttar Pardesh, India</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><i class="fa-solid fa-envelope fa-flip"></i></h5>
                        <p class="card-text mt-4">Email : hlsyear2000@gmail.com</p>
                    </div>
                </div>
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