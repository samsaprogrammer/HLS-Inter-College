<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("location:plogin.php");
}
?>

<?php
#Connect database...
include("../../dbManager.php");

if (isset($_POST['firstclassbtn'])) {
    $query = "INSERT INTO `sevenclass`(`rollno`, `studentname`, `fname`, `mname`, `gender`, `dob`, `section`, `address`, `remark`) VALUES ('$_POST[rollno]','$_POST[studentname]','$_POST[fname]','$_POST[mname]','$_POST[gender]','$_POST[dob]','$_POST[section]','$_POST[address]','$_POST[remark]')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "
        <script>
        alert('Data Submit');
        window.location.href='studentclass.php';
        </script>
      ";
    } else {
        echo "
        <script>
        alert('Not Submit');
        window.location.href='studentclass.php';
        </script>
      ";
    }
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
            <h1>Seven Class</h1>
        </div>

        <div class="row header-menu-section">
            <div class="col-sm-12 second-row">
                <a href="studentclass.php">
                    <h4 class="mt-3 ms-4">
                        << Back To Dashbord</h4>
                </a>
            </div>
        </div>
    </div>
    <!-- Header Section end -->



    <!-- Main Box start -->

    <div class="container mt-5 mb-5">
        <form action="#" method="POST">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="rollno" id="exampleFormControlInput1" placeholder="Enter Roll No....">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="studentname" id="exampleFormControlInput1" placeholder="Enter Student Name....">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="fname" id="exampleFormControlInput1" placeholder="Enter Father Name...">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="mname" id="exampleFormControlInput1" placeholder="Enter Mother Name...">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="gender" id="exampleFormControlInput1" placeholder="Enter Gender....">
                    </div>
                    <button class="btn btn-warning" name="firstclassbtn">Submit</button>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                        <input type="date" class="form-control" name="dob" id="exampleFormControlInput1" placeholder="Enter DOB....">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="section" id="exampleFormControlInput1" placeholder="Enter Section....">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" placeholder="Enter Student Address...." rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" placeholder="Enter Remark...." rows="2"></textarea>
                    </div>
                </div>
            </div>
        </form>
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