<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("location:plogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Class</title>
    <!-- Css -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/simpleheader.css">
    <link rel="stylesheet" href="/css/footer.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" />
</head>

<body>
    <!-- Header Section start -->
    <div class="row Header">
        <div class="col-sm-12 text-center header-details-section">
            <h1>Student Class Section</h1>
        </div>

        <div class="row header-menu-section">
            <div class="col-sm-12 second-row">
                <a href="../dashbord.php">
                    <h4 class="mt-3 ms-4">
                        << Back To Dashbord</h4>
                </a>
            </div>
        </div>
    </div>
    <!-- Header Section end -->



    <!-- Main Box start -->

    <div class="container-fluid mt-5 mb-5">
        <!-- First row -->
        <div class="row">
            <div class="col-sm-3">
                <div class="card text-center mb-3" style="width: 18rem; border:none;">
                    <div class="card-body add_teachers">
                        <h5 class="card-title">First Class</h5>
                        <h2><ion-icon name="person-add"></ion-icon></h2>
                        <a href="/Principal zone/studentzone/firstclass.php" class="btn btn-outline-secondary">Add</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center mb-3" style="width: 18rem; border:none;">
                    <div class="card-body add_teachers">
                        <h5 class="card-title">Second Class</h5>
                        <h2><ion-icon name="person-add"></ion-icon></h2>
                        <a href="/Principal zone/studentzone/secondclass.php" class="btn btn-outline-secondary">Add</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center mb-3" style="width: 18rem; border:none;">
                    <div class="card-body add_teachers">
                        <h5 class="card-title">Third Class</h5>
                        <h2><ion-icon name="person-add"></ion-icon></h2>
                        <a href="/Principal zone/studentzone/thirdclass.php" class="btn btn-outline-secondary">Add</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center mb-3" style="width: 18rem; border:none;">
                    <div class="card-body add_teachers">
                        <h5 class="card-title">Fourth Class</h5>
                        <h2><ion-icon name="person-add"></ion-icon></h2>
                        <a href="/Principal zone/studentzone/fourthclass.php" class="btn btn-outline-secondary">Add</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second row -->
        <div class="row">
            <div class="col-sm-3">
                <div class="card text-center mb-3" style="width: 18rem; border:none;">
                    <div class="card-body add_teachers">
                        <h5 class="card-title">Fifth Class</h5>
                        <h2><ion-icon name="person-add"></ion-icon></h2>
                        <a href="/Principal zone/studentzone/fifthclass.php" class="btn btn-outline-secondary">Add</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center mb-3" style="width: 18rem; border:none;">
                    <div class="card-body add_teachers">
                        <h5 class="card-title">Six Class</h5>
                        <h2><ion-icon name="person-add"></ion-icon></h2>
                        <a href="/Principal zone/studentzone/sixclass.php" class="btn btn-outline-secondary">Add</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center mb-3" style="width: 18rem; border:none;">
                    <div class="card-body add_teachers">
                        <h5 class="card-title">Seven Class</h5>
                        <h2><ion-icon name="person-add"></ion-icon></h2>
                        <a href="/Principal zone/studentzone/sevenclass.php" class="btn btn-outline-secondary">Add</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center mb-3" style="width: 18rem; border:none;">
                    <div class="card-body add_teachers">
                        <h5 class="card-title">Eight Class</h5>
                        <h2><ion-icon name="person-add"></ion-icon></h2>
                        <a href="/Principal zone/studentzone/eightclass.php" class="btn btn-outline-secondary">Add</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Third row -->
        <div class="row">
            <div class="col-sm-3">
                <div class="card text-center mb-3" style="width: 18rem; border:none;">
                    <div class="card-body add_teachers">
                        <h5 class="card-title">Nine Class</h5>
                        <h2><ion-icon name="person-add"></ion-icon></h2>
                        <a href="/Principal zone/studentzone/nineclass.php" class="btn btn-outline-secondary">Add</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center mb-3" style="width: 18rem; border:none;">
                    <div class="card-body add_teachers">
                        <h5 class="card-title">Ten Class</h5>
                        <h2><ion-icon name="person-add"></ion-icon></h2>
                        <a href="/Principal zone/studentzone/tenclass.php" class="btn btn-outline-secondary">Add</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center mb-3" style="width: 18rem; border:none;">
                    <div class="card-body add_teachers">
                        <h5 class="card-title">Eleven Class</h5>
                        <h2><ion-icon name="person-add"></ion-icon></h2>
                        <a href="/Principal zone/studentzone/elevenclass.php" class="btn btn-outline-secondary">Add</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center mb-3" style="width: 18rem; border:none;">
                    <div class="card-body add_teachers">
                        <h5 class="card-title">Twelve Class</h5>
                        <h2><ion-icon name="person-add"></ion-icon></h2>
                        <a href="/Principal zone/studentzone/twelveclass.php" class="btn btn-outline-secondary">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Box ned -->


    <?php
    // Include the footer.php file
    require_once '../../footer.php';
    ?>
    <!-- JS -->
    <script src="/js/principal js/dashbord.js"></script>
    <!-- Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>