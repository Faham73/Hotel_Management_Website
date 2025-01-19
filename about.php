<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TJ Hotel - ABOUT US</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <?php require('inc/links.php'); ?>
  <style>
    .box {
      border-top-color: var(--teal) !important;
    }
  </style>
</head>

<body class="bg-light">

  <!-- Header -->
  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">About us</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Nam obcaecati, quis providentbr <br> quasi ipsam nulla error.
      Minima id dolore sapiente
    </p>
  </div>

  <div class="container">
    <div class="row jsutify-content align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Culpa et tempora esse est nobis quos. Numquam explicabo minima eveniet, dignissimos,
          aliquid molestias obcaecati alias, recusandae architecto eos ullam deserunt nesciunt!
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 orer-lg-2 order-lg-2 order-1">
        <img src="images/about/ceo2.jpg" width="w-100">

      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/hotel-svgrepo-com.svg" width="70px">
          <h4 class="mt-3">100+ Rooms</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/users-svgrepo-com.svg" width="70px">
          <h4 class="mt-3">1000+ CUSTOMERS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/customer-reviews-svgrepo-com.svg" width="70px">
          <h4 class="mt-3">150+ REVIEWS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/hotel-staff-to-guide-svgrepo-com.svg" width="70px">
          <h4 class="mt-3">50+ STAFFS</h4>
        </div>
      </div>
    </div>
  </div>

  <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>


  <!-- Swiper -->
  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" width="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" width="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" width="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" width="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" width="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" width="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>


  <!-- Footer -->
  <?php require('inc/footer.php'); ?>


  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 4,
        },
      }
    });
  </script>

</body>

</html>