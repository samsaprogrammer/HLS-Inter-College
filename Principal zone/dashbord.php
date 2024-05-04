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
    <title>Admin Dashbord</title>
    <!-- Css -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/principle css/dashbord.css">
    <link rel="stylesheet" href="/css/res.css">
    <link rel="shortcut icon" href="/img/logo/logo.png" type="image/x-icon">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" />
</head>

<body>
    <div class="">




        <div class="row">
            <!-- Side Navbar section stat -->
            <div class="col-sm-3">

                <div class="das_navigation">
                    <ul>
                        <li class="sideNav-img">
                            <a href="#">
                                <img src="/img/eurtugul (2).jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="home-outline"></ion-icon>
                                </span>
                                <span class="title">Dashbord</span>
                            </a>
                        </li>
                        <li>
                            <a href="/Principal zone/showstudentdata/showstudentclass.php">
                                <span class="icon">
                                    <ion-icon name="person-circle-outline"></ion-icon>
                                </span>
                                <span class="title">Student</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="call-outline"></ion-icon>
                                </span>
                                <span class="title">Enquiry Box </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="settings-outline"></ion-icon>
                                </span>
                                <span class="title">Notice Box</span>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <span class="icon">
                                    <ion-icon name="log-out-outline"></ion-icon>
                                </span>
                                <span class="title">Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Side Navbar section end -->
            '


            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12  headerbar">
                        <!-- Header Section Start -->

                        <!-- ---------------Toogle Section-----------  -->
                        <div class="topbar">
                            <div class="toggle">
                                <ion-icon name="menu-outline"></ion-icon>
                            </div>

                            <!-- -----------------Search section--------------------------- -->
                            <!-- <div class="search">
                                <label for="">
                                    <input type="text" placeholder="Search Here" />
                                    <ion-icon name="search-outline"></ion-icon>
                                </label>
                            </div> -->


                            <button onclick="document.getElementById('id01').style.display='block'" style="width: auto">
                                <div class="user">
                                    <img src="/assets/wali.png" alt="" />
                                </div>
                            </button>

                            <div id="id01" class="modal">
                                <form class="modal-content animate" action="/action_page.php" method="post">
                                    <div class="imgcontainer">
                                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                        <img src="/assets/wali.png" alt="Avatar" class="avatar" />
                                    </div>

                                    <div class="modalcontainer">
                                        <h2>Hi, Sir</h2>
                                        <p><?php echo $_SESSION["username"] ?></p>
                                        <h1>Logout</h1>
                                    </div>

                                    <!-- <div class="add_account">
                                        <h5><a href="sign_up.html">Add account</a></h5>
                                    </div> -->
                                </form>
                            </div>
                            <!-- Header Section End -->
                        </div>
                    </div>
                </div>
                <!-- Main Section start -->
                <div class="row mt-5">
                    <div class="col-sm-3"></div>
                    <!-- Add Teacher Section start -->
                    <div class="col-sm-3">
                        <div class="card text-center mb-3" style="width: 18rem; border:none;">
                            <div class="card-body add_teachers">
                                <h5 class="card-title">Add Student</h5>
                                <h2><ion-icon name="person-add"></ion-icon></h2>
                                <a href="/Principal zone/studentzone/studentclass.php" class="btn btn-outline-secondary">Add</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add teacher section end -->
                    <div class="col-sm-3">
                    <div class="card text-center mb-3" style="width: 18rem; border:none;">
                            <div class="card-body add_teachers">
                                <h5 class="card-title">Add Notice</h5>
                                <h2><ion-icon name="mail-open"></ion-icon></h2>
                                <a href="#" class="btn btn-outline-secondary">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="card text-center mb-3" style="width: 18rem; border:none;">
                            <div class="card-body add_teachers">
                                <h5 class="card-title">Enquiry Here</h5>
                                <h2><ion-icon name="link"></ion-icon></h2>
                                <a href="#" class="btn btn-outline-secondary">Add</a>
                            </div>
                        </div> 
                    </div>
                </div>
                <!-- Main Section end -->
            </div>




            <!-- Outer Section End -->
        </div>

        <!-- JS -->
        <script src="/js/principal js/dashbord.js"></script>
        <!-- Icon -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>