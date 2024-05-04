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
    <title>Student Data</title>
    <!-- Css -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/simpleheader.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="shortcut icon" href="/img/logo/logo.png" type="image/x-icon">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" />
</head>

<body>
    <!-- Header Section start -->
    <div class="row Header">
        <div class="col-sm-12 text-center header-details-section">
            <h1>Eight Class Student Data</h1>
        </div>

        <div class="row header-menu-section">
            <div class="col-sm-12 second-row">
            <a href="../dashbord.php"><h4 class="mt-3 ms-4"><< Back To Dashbord</h4></a>
            </div>
        </div>
    </div>
    <!-- Header Section end -->



    <!-- Main Box start -->
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Roll no</th>
                            <th>Name</th>
                            <th>Father name</th>
                            <th>Mother name</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>Section</th>
                            <th>Address</th>
                            <th>Remark</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        #Database connect...
                        include("../../dbManager.php");

                        $query = "SELECT * FROM eightclass";
                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                           <tr>
                            <td><?php echo $row["rollno"]; ?></td>
                            <td><?php echo $row["studentname"]; ?></td>
                            <td><?php echo $row["fname"]; ?></td>
                            <td><?php echo $row["mname"]; ?></td>
                            <td><?php echo $row["gender"]; ?></td>
                            <td><?php echo $row["dob"]; ?></td>
                            <td><?php echo $row["section"]; ?></td>
                            <td><?php echo $row["address"]; ?></td>
                            <td><?php echo $row["remark"]; ?></td>
                            <td>
                                <a href="del.php?rollno=<?php echo $row["rollno"]; ?>"  class="btn btn-danger">Delete</a>
                            </td>
                           </tr>
                        <?php
                        }

                        ?>
                    </tbody>
                </table>
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