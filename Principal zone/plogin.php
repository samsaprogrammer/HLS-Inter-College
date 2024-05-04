<?php
session_start();
?>


<?php
include "../dbManager.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "select * from principlelogin where username='" . $username . "' AND password='" . $password . "' ";

  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);

  if ($row["usertype"] == "admin") {
    $_SESSION["username"] = $username;
    header("location:dashbord.php");
  } else {
    echo "<div class='message'>
                    <p>Wrong  Password</p>
                    </div><br>";

    echo "<a href='../index.php'><button class='btn'>Go Back</button></a>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Principal Login</title>
  <!-- Css -->
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/simpleheader.css">
  <link rel="stylesheet" href="/css/res.css">
  <link rel="stylesheet" href="/css/footer.css">
  <!-- Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    body {
      background: #EAEAEA;
    }

    .login-box {
      position: absolute;
      top: 50%;
      left: 60%;
      width: 400px;
      padding: 40px;
      transform: translate(-50%, -50%);
      background: rgba(24, 20, 20, 0.987);
      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
      border-radius: 10px;
    }

    .login-box .user-box {
      position: relative;
    }

    .login-box .user-box input {
      width: 100%;
      padding: 10px 0;
      font-size: 16px;
      color: #fff;
      margin-bottom: 30px;
      border: none;
      border-bottom: 1px solid #fff;
      outline: none;
      background: transparent;
    }

    .login-box .user-box label {
      position: absolute;
      top: 0;
      left: 0;
      padding: 10px 0;
      font-size: 16px;
      color: #fff;
      pointer-events: none;
      transition: .5s;
    }

    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
      top: -20px;
      left: 0;
      color: #bdb8b8;
      font-size: 12px;
    }

    .login-box form i {
      position: relative;
      display: inline-block;
      padding: 10px 20px;
      color: #ffffff;
      font-size: 16px;
      text-decoration: none;
      text-transform: uppercase;
      overflow: hidden;
      transition: .5s;
      margin-top: 40px;
      letter-spacing: 4px;
    }

    .login-box i:hover {
      background: #129BEE;
      color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 5px #129BEE,
        0 0 25px #129BEE,
        0 0 50px #129BEE,
        0 0 100px #129BEE;
    }

    .login-btn {
      background-color: transparent;
      border: none;
      color: #ffffff;
      font-size: 16px;
      text-decoration: none;
      text-transform: uppercase;
      overflow: hidden;
      transition: .5s;
      letter-spacing: 4px;
    }

    .login-box i span {
      position: absolute;
      display: block;
    }

    @keyframes btn-anim1 {
      0% {
        left: -100%;
      }

      50%,
      100% {
        left: 100%;
      }
    }

    .login-box i span:nth-child(1) {
      bottom: 2px;
      left: -100%;
      width: 100%;
      height: 2px;
      background: linear-gradient(90deg, transparent, #129BEE);
      animation: btn-anim1 2s linear infinite;
    }

    .gif-box {
      margin-top: 2%;
    }

    .heading-box h1 {
      font-size: 4rem;
      font-weight: 500;
      margin-left: 25%;
      margin-top: 3%;
    }

      /* login section start */
  @media (min-width:360px) and (max-width:599px)  { /* smartphones, Android phones, landscape iPhone */
    .gif-box img{
      display: none;
    }
    .pg-footer{
      display: none;
    }
    .login-box{
      width: 300px;
      margin-left: -18%;
    }
  }

  /* login section end */
  </style>
</head>

<body>
  <!-- Header Section staer -->
  <div class="row Header">
    <div class="col-sm-12 text-center header-details-section">
      <h1>Principal Login</h1>
    </div>

    <div class="row header-menu-section">
      <div class="col-sm-12 second-row">
        <a href="../index.php">
          <h4 class="mt-3 ms-4">
            <<< Back To Home </h4>
        </a>
      </div>
    </div>
  </div>
  <!-- Header section end -->

  <div class="container">
    <div class="row">
      <div class="col-sm-6 gif-box">
        <img src="/assets/admin_login.gif" class="w-100" alt="">
      </div>
      <div class="col-sm-6">
        <div class="login-box">

          <form action="#" method="POST">
            <div class="user-box">
              <input type="text" name="username" required="">
              <label>Username</label>
            </div>
            <div class="user-box">
              <input type="password" name="password" required="">
              <label>Password</label>
            </div>
            <i>
              <input type="submit" name="login" id="submit" value="Login" class="login-btn">
              <span></span>
            </i>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Section staer -->
  <?php
  // Include the footer.php file
  require_once '../footer.php';
  ?>
  <!-- Footer section end -->
</body>

</html>