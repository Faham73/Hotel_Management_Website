<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TJ Hotel - HOME</title>
  <?php require('inc/links.php'); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <style>
    /* Availibility-form over carousel */
    .availibility-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .availibility-form {
        margin-top: 25px;
        padding: 0 35px;
      }
    }
  </style>
</head>

<body class="bg-light">
  
  <?php require('inc/header.php'); ?>

  <!-- Carousel(Swiper js) -->
  <div class="containerr-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/1.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/3.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/5.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/1.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/3.jpg" class="w-100 d-block">
        </div>
      </div>
    </div>
  </div>

  <!-- Check availability form -->
  <div class="container availibility-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5>Check Booking availability</h5>
        <form>
          <div class="row">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Adult</label>
              <select class="form-select shadow-none">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500;">Children</label>
              <select class="form-select shadow-none">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mb-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Our Rooms -->
  <h2 class="mt-5 pt-4 mb-4 text-center fm-bold h-font">OUR ROOMS</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350ox; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">$200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                1 Bathrom
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                1 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                Wifi
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                Television
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                AC
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                Room eater
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350ox; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">$200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                1 Bathrom
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                1 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                Wifi
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                Television
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                AC
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                Room eater
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350ox; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">$200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                1 Bathrom
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                1 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                Wifi
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                Television
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                AC
              </span>
              <span class="badge bg-light text-dark text-dark text-wrap lh-base">
                Room eater
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-half text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>> </a>
      </div>
    </div>
  </div>

  <!-- Our Facilities -->
  <h2 class="mt-5 pt-4 mb-4 text-center fm-bold h-font">OUR FACILIITES</h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/features/wifi.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/features/wifi.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/features/wifi.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/features/wifi.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/features/wifi.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>


      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>> </a>
      </div>
    </div>
  </div>

  <!-- Testimonials -->
  <h2 class="mt-5 pt-4 mb-4 text-center fm-bold h-font">TESTIMONIALS</h2>

  <div class="container mt-5">
    <!-- Swiper -->
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/features/star-fill.svg" width="30px" />
            <h6 class="m-0 ms-2">Random user 1</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Nemo inventore illo cupiditate repudiandae amet blanditiis
            ad dolorum corrupti esse rem.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/features/star-fill.svg" width="30px" />
            <h6 class="m-0 ms-2">Random user 2</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Nemo inventore illo cupiditate repudiandae amet blanditiis
            ad dolorum corrupti esse rem.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/features/star-fill.svg" width="30px" />
            <h6 class="m-0 ms-2">Random user 3</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Nemo inventore illo cupiditate repudiandae amet blanditiis
            ad dolorum corrupti esse rem.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/features/star-fill.svg" width="30px" />
            <h6 class="m-0 ms-2">Random user 4</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Nemo inventore illo cupiditate repudiandae amet blanditiis
            ad dolorum corrupti esse rem.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- Reach us -->
  <h2 class="mt-5 pt-4 mb-4 text-center fm-bold h-font">REACH US</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.0165081072278!2d90.35983747538049!3d23.782426478648475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0b93f4aabaf%3A0x102331488d97ab5c!2sKallyanpur%20Rd%20Number%2011%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1737132871405!5m2!1sen!2sbd"
          loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call us</h5>
          <a href="tel: +8801518985997" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +8801518985997
          </a>
          <br>
          <a href="tel: +8801518985997" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +8801723024794
          </a>
        </div>

        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter me-1"></i> Twitter
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i> Facebook
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i> Instagram
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
   <?php require('inc/footer.php'); ?>







  
  
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        }
      }
    });
  </script>

</body>

</html>