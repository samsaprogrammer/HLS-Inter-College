<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HLS Inter College</title>


  <!-- Css -->
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet" href="/css/header.css" />
  <link rel="stylesheet" href="/css/bootstrap.css" />
  <link rel="stylesheet" href="/css/footer.css">
  <link rel="stylesheet" href="/css/res.css">
  <link rel="shortcut icon" href="/img/logo/logo.png" type="image/x-icon">
  <!-- Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- Scroll animation  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
  <div class="outer">

    <!-- Header Section start -->
    <?php
    // Include the header.php file
    require_once 'header.php';
    ?>
    <!-- Header Section end -->


    <!-- Slider Section start -->

    <div class="row p-0">
      <div class="col-sm-12">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/img/Banner/s2.PNG" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="text-warning">HLS Inter College</h1>
                <h4 class="text-dark">Devmanpur Ghatampur Kanpur Nagar</h4>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/img/Banner/sliderc1.PNG" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <!-- <h1 class="text-warning">HLS Inter College</h1>
                <h4 class="text-dark">Devmanpur Ghatampur Kanpur Nagar</h4> -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="/img/Banner/s3.PNG" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="text-warning">HLS Inter College</h1>
                <h4 class="text-dark">Devmanpur Ghatampur Kanpur Nagar</h4>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/img/Banner/s4.PNG" class="d-block w-100" alt="...">
              <!-- <div class="carousel-caption d-none d-md-block">
                <h1 class="text-warning">HLS Inter College</h1>
                <h4 class="text-dark">Devmanpur Ghatampur Kanpur Nagar</h4>
              </div> -->
            </div>
            <div class="carousel-item">
              <img src="/img/Banner/slide5.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="text-warning">HLS Inter College</h1>
                <h4 class="text-dark">Devmanpur Ghatampur Kanpur Nagar</h4>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>


    <!-- Slider Section end -->


    <!-- About Section start -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-sm-6">
          <h3 data-aos="fade-right">About Us</h3>
          <p data-aos="fade-right">To develop a positive, vibrant and healthy learning environment so that ideas can be converted in to constant never ending actions towards the advancement of the society.</p>
          <p data-aos="fade-right">The school is founded in the memory of Late Pt. Raja Raj Kumar Bakshi, a noted humanitarian and philanthropist. Situated amid a picturesque and spacious campus at Alam Nagar, Lucknow, it was started with just about 50 students and 3 teachers in the year 1980. Today with over 2500 students and more than 70 well qualified teachers, the main branch of the school is affiliated to Council for the Indian School Certificate Examination, New Delhi (X & XII), while Alam Nagar branch which was started in 1987 is affiliated to UP Board (X & XII).</p>
          <p data-aos="fade-right">While playing adequate emphasis on the prescribed syllabus, the school pays extra attention to personality development, which is furthered by involving all students in various arts, cultural, and sport activities through trained professionals...</p>
        </div>
        <div class="col-sm-2">
          <img src="/img/UI_image/students_3.png" data-aos="flip-up" class="w-100 h-100" alt="">
        </div>
        <div class="col-sm-4">
          <div class="noticeBoard shadow" data-aos="fade-down-right">
            <div class="ribbon" data-aos="fade-left">
              <div class="ribbon-stitches-top"></div>
              <div class="ribbon-content">
                <span>Notice Board</span>
              </div>
              <div class="ribbon-stitches-bottom"></div>
            </div>
            <marquee behavior="" direction="down">
              <table class="table table-bordered">
               
              </table>
            </marquee>
          </div>
        </div>
      </div>
    </div>
    <!-- About Section end -->

    <!-- Our Event Section start -->

    <div class="container mt-5">
      <h4 class="event_heading">Our Events</h4>
      <div class="row" data-aos="zoom-out">
        <div class="col-sm-6 shadow eventl">
          <img src="/img/Event/event3.jpg" class="rounded-3 w-100" alt="">
          <h4 class="mt-3">Visit of Wilbur School</h4>
          <p class="mt-3">Pushpanjali to Late Shrimati Rani Mira Bakshi Ji 15 Dec 1936 - 4 April 2019 Special Assembly to Commemorate the Death Anniversary of Late Shrimati Rani Mira Bakshi Ji.</p>
        </div>
        <div class="col-sm-6">
          <div class="events_section">
            <div class="event red shadow">
              <div class="row">
                <div class="col-sm-6">
                  <img src="/img/Event/event5.PNG" class="w-100 rounded-3 h-100" alt="">
                </div>
                <div class="col-sm-6">
                  <h4>Frolic Fete</h4>
                  <p>Frolic Fete</p>
                </div>
              </div>
            </div>
            <div class="event blue shadow ">
              <div class="row">
                <div class="col-sm-6">
                  <img src="/img/Event/event2.PNG" class="w-100 rounded-3" alt="">
                </div>
                <div class="col-sm-6">
                  <h4>Music & Singing Competition</h4>
                  <p>Compose to the Rhythm of Your Heart!</p>
                </div>
              </div>
            </div>
            <div class="event green shadow">
              <div class="row">
                <div class="col-sm-6">
                  <img src="/img/Event/event1.PNG" class="w-100 rounded-3" alt="">
                </div>
                <div class="col-sm-6">
                  <h4>Visit of Wilbur School</h4>
                  <p>Visit of Wilbur School Principal to Lucknow for Inter School Competition</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Our Event Section end -->



    <!-- Massage desk section start -->

    <div class="container m-5">
      <h3 class="massage_desk_heading mt-3">Massage Desk</h3>
      <div class="row">
        <div class="col-sm-4">
          <div class="results-summary-container">
            <div class="confetti">
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
            </div>
            <div class="results-summary-container__result">
              <div class="result-box">
                <img src="/img/CollegeHead/principal.PNG" data-aos="zoom-in" class="" alt="">
              </div>
              <div class="result-text-box">
                <div class="heading-secondary">Mr. Sanjeevan</div>
                <div class="heading-tertiary">Principal</div>
                <div class="heading-degree">MA,B.ed</div>
              </div>
              <!-- <div class="summary__cta">
                  <button class="btn btn__continue">Continue 
                </button>
                </div> -->
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="results-summary-container">
            <div class="confetti">
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
            </div>
            <div class="results-summary-container__result">
              <div class="result-box">
                <img src="/img/CollegeHead/manager.PNG" data-aos="zoom-in" class="" alt="">
              </div>
              <div class="result-text-box">
                <div class="heading-secondary">Mr. Rajkumar Sachan Hori</div>
                <div class="heading-tertiary">Manager</div>
                <div class="heading-degree">Ba,Bed</div>
              </div>
              <!-- <div class="summary__cta">
                  <button class="btn btn__continue">Continue 
                </button>
                </div> -->
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <!-- <div class="results-summary-container">
            <div class="confetti">
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
              <div class="confetti-piece"></div>
            </div>
            <div class="results-summary-container__result">
              <div class="result-box">
                <img src="/img/CollegeHead/Principal.jpg" data-aos="zoom-in" class="" alt="">
              </div>
              <div class="result-text-box">
                <div class="heading-secondary">Mr. Rajiv Bakshi</div>
                <div class="heading-tertiary">Our Founder</div>
                <div class="heading-degree">MA,B.ed</div> -->
              </div>
              <!-- <div class="summary__cta">
                  <button class="btn btn__continue">Continue 
                </button>
                </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Massage desk section end -->



    <!-- Produse section start -->
    <div class="row prellex_content" style="background-color: #F3F4F6;">
      <div class="parallax">

        <!-- Upper Design Png Section start -->
        <div class="row">
          <div class="col-sm-12">
            <img src="/assets/topper_btm.png" class="w-100" alt="Top bg">
          </div>
        </div>
        <!-- Upper Design Png Section end -->

        <!-- Video CArd Section -->
        <div class="row" data-aos="zoom-in">
          <div class="col-sm-6">
            <div class="video-card">
            <iframe width="500" height="315" src="https://www.youtube.com/embed/Th6uQSxSmo0?si=w2aWUilfrm-4lDtU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Count Section start -->
          <div class="col-sm-6">
            <div class="row">
              <!-- Student section start -->
              <div class="col-sm-6">
                <div class="count-card">
                  <a class="count-card1" href="#">
                    <h1>13.5K+</h1>
                    <p class="small">Students</p>
                    <div class="go-corner" href="#">
                      <div class="go-arrow">
                        👨🏻‍🎓
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <!-- Student Section end -->

              <!-- Alumi section start -->
              <div class="col-sm-6">
                <div class="count-card">
                  <a class="count-card1" href="#">
                    <h1>5000+</h1>
                    <p class="small">Alumi</p>
                    <div class="go-corner" href="#">
                      <div class="go-arrow">
                        🎓
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <!-- Alumi section end -->


              <div class="row">

                <!-- Teacher Section start -->
                <div class="col-sm-6">
                  <div class="count-card">
                    <a class="count-card1" href="#">
                      <h1>50+</h1>
                      <p class="small">Teachers</p>
                      <div class="go-corner" href="#">
                        <div class="go-arrow">
                          👨🏻‍💼
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- Teacher Section end -->

                <!-- Classes Section start -->
                <div class="col-sm-6">
                  <div class="count-card">
                    <a class="count-card1" href="#">
                      <h1>70+</h1>
                      <p class="small">Classes</p>
                      <div class="go-corner" href="#">
                        <div class="go-arrow">
                          🙋🏻‍♀️
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- Clesses Section end -->
              </div>
            </div>
          </div>
          <!-- Count Section end -->
        </div>

        <!-- Bottom Design Png Section start -->
        <div class="row">
          <div class="col-sm-12">
            <img src="/assets/event_bottom.png" class="w-100" alt="">
          </div>
        </div>
        <!-- Bottom Design Png Section end -->
      </div>
    </div>
    <!-- Produse section end -->

    <!-- Our Toppers Section Start -->


    <!-- <div class="row mt-5 mb-5" style="  background:  url(/assets/deskshape.png); background-size: cover;   background-repeat: no-repeat;">
      <div class="col-sm-12">
        <h4>Our Toppers</h4> -->
        <!-- Swiper -->
        <!-- <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>

            <div class="swiper-slide second-topper">
              <img src="/img/Toppers_img/AkarshSharma.png" class="w-50" alt="">
              <div class="topper_name">
                <h2>Akash Sharma</h2>
              </div>
              <div class="topper_class">
                <h4>Class : <span>12 <sup>th</sup></span></h4> -->
                <!-- <hr> -->
                <!-- <div class="topper_per">
                  <h4>Percentage : <span>81.33%</span></h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
          </div>
        </div>
      </div>
    </div> -->



    <!-- Our Toppers Section End -->



    <!-- Footer Section staer -->
    <?php
    // Include the footer.php file
    require_once 'footer.php';
    ?>
    <!-- Footer section end -->




  

    <!-- Outer Section end  -->
  </div>



  <!-- Js Section  -->
  <script src="/js/bootstrap.bundle.js"></script>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      watchSlidesProgress: true,
      slidesPerView: 3,
    });
  </script>


  <!-- Scroll Animation -->

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 300,
      duration: 1000,
    });
  </script>

  <!-- Scroll Animation -->
</body>

</html>