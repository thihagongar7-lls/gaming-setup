<?php include './config/connection.php';
unset($_SESSION['cart']);
?>
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS style -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootstrap + Google Font (optional gaming font) -->
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


  <style>
    body {
      padding-bottom: 3rem;
      color: var(--text-main);
      background-color: var(--bg-dark);
      font-size: medium;
      font-family: 'Orbitron', sans-serif;
    }

    /* HERO SECTION */
    .hero {
      position: relative;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    /* VIDEO BACKGROUND */
    .video-bg {
      position: absolute;
      width: 100%;
      height: 100%;
      z-index: -2;
    }

    .video-bg video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* DARK OVERLAY */
    .video-bg::after {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      top: 0;
      left: 0;
      z-index: 1;
    }

    /* HERO CONTENT */
    .hero-content {
      z-index: 2;
      color: #fff;
      max-width: 700px;
      padding: 20px;
    }

    /* TITLE */
    .hero-title {
      font-size: 3rem;
      font-weight: bold;
      text-transform: uppercase;
    }

    .hero-title span {
      color: #00f5ff;
      text-shadow: 0 0 15px #00f5ff;
    }

    /* SUBTITLE */
    .hero-subtitle {
      font-size: 1.2rem;
      color: #ccc;
      margin-top: 15px;
    }

    /* BUTTONS */
    .hero-buttons .btn {
      font-weight: bold;
      transition: 0.3s;
    }

    .hero-buttons .btn:hover {
      transform: scale(1.1);
    }

    .marketing .col-lg-4 {
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .marketing h2 {
      font-weight: 700;
    }

    /* rtl:begin:ignore */
    .marketing .col-lg-4 p {
      margin-right: .75rem;
      margin-left: .75rem;
    }

    /* Background */
    .gaming-navbar {
      background: #0f172a;
      /* dark blue/black */
      font-family: 'Orbitron', sans-serif;
    }

    /* Neon Text */
    .text-neon {
      color: #00f7ff;
      text-shadow: 0 0 10px #00f7ff;
    }

    .navbar-nav {
      flex-direction: row !important;
    }

    /* Nav Links */
    .neon-link {
      color: #000;
      margin: 0 10px;
      transition: 0.3s;
    }

    .neon-link:hover {
      color: #00f7ff;
      text-shadow: 0 0 8px #00f7ff;
    }

    /* Active Link */
    .nav-link.active {
      color: #00f7ff !important;
      text-shadow: 0 0 10px #00f7ff;
    }

    /* Neon Button */
    .neon-btn {
      color: #00f7ff;
      border: 2px solid #00f7ff;
      padding: 6px 15px;
      margin-left: 10px;
      border-radius: 8px;
      transition: 0.3s;
    }

    .neon-btn:hover {
      margin-right: 3px;
      /* Don't change it!! */
      background: #00f7ff;
      color: #000;
      box-shadow: 0 0 15px #00f7ff;
    }

    /* Button */
    .btn-neon {
      background: #0ff;
      color: #000;
      border-radius: 25px;
      padding: 6px 20px;
    }

    .btn-neon:hover {
      background: #00cccc;
    }

    .carousel-item {
      width: 100%;
      height: 500px;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .service-box {
      background: var(--primary);
      border-radius: 20px;
      color: #1a1f4b;
    }

    .service-box h2 {
      font-weight: bold;
    }

    .service-item {
      align-items: flex-start;
    }

    .icon-box {
      width: 70px;
      height: 70px;
      background: #2beef5;
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .icon-box i {
      font-size: 30px;
      color: #1a1f4b;
    }

    .title {
      color: #000;
      font-weight: bold;
    }

    .section {
      padding: 30px 0;
    }

    .map-container iframe {
      width: 100%;
      height: 400px;
      border-radius: 12px;
      border: none;
    }

    .contact-box {
      position: relative;
      background: #0f172a;
      padding: 30px;
      border-radius: 15px;
      z-index: 1;
      overflow: hidden;
    }

    /* Animated RGB border */
    .contact-box::before {
      content: "";
      position: absolute;
      inset: -2px;
      background: linear-gradient(270deg,
          var(--neon-red),
          var(--neon-blue),
          var(--neon-purple),
          var(--neon-red));
      background-size: 600% 600%;
      animation: rgbBorder 6s linear infinite;
      z-index: -1;
      filter: blur(8px);
    }

    /* Inner background */
    .contact-box::after {
      content: "";
      position: absolute;
      inset: 2px;
      background: #020617;
      border-radius: 12px;
      z-index: -1;
    }

    /* RGB animation */
    @keyframes rgbBorder {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    /* INPUT STYLE */
    .form-control {
      background: transparent;
      border: 1px solid #334155;
      color: #fff;
      transition: 0.3s ease;
    }

    /* INPUT GLOW ON FOCUS */
    .form-control:focus {
      border-color: var(--neon-blue);
      box-shadow: 0 0 10px var(--neon-blue),
        0 0 20px var(--neon-blue);
      background: transparent;
      color: #fff;
    }

    /* LABEL */
    .form-label {
      color: #94a3b8;
    }

    .btn-red {
      background: linear-gradient(45deg, #ff003c, #ff4d6d);
      border: none;
      color: white;
      font-weight: bold;
      transition: 0.3s;
    }

    .btn-red:hover {
      box-shadow: 0 0 10px #ff003c,
        0 0 20px #ff003c,
        0 0 40px #ff003c;
      transform: scale(1.05);
    }

    .gaming-categories {
      background: #020617;
    }

    .category-img {
      border: 2px solid #00f5ff;
      padding: 5px;
      width: 50%;
      transition: 0.3s;
    }

    .category-img:hover {
      transform: scale(1.1);
      box-shadow: 0 0 15px #00f5ff;
    }

    .sale {
      background: #020617;
    }

    .gaming-card {
      background: #0f172a;
      border: 1px solid #00f5ff33;
      transition: 0.3s;
    }

    .gaming-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 0 20px #00f5ff55;
    }

    .neon-text {
      color: #00f5ff;
      text-shadow: 0 0 10px #00f5ff;
    }

    .neon-btn {
      background: #00f5ff;
      color: #000;
      border: none;
    }

    .neon-btn:hover {
      box-shadow: 0 0 15px #00f5ff;
    }

    .products-section {
      background: #0d0d0d;
      color: white;
    }

    /* Card */
    .gaming-card {
      background: #111;
      border-radius: 15px;
      overflow: hidden;
      border: 1px solid #0ff;
      transition: 0.3s;
      position: relative;
      padding: 4px;
    }

    .gaming-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 0 25px #0ff;
    }

    /* Image */
    .card-img-wrapper {
      width: 100%;
      height: 220px;
      /* fixed height */
      overflow: hidden;
      position: relative;
      border-radius: 12px;
    }

    .card-img-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      /* important: crop nicely */
      object-position: center;
    }

    .gaming-card:hover img {
      transform: scale(1.1);
    }

    /* Sale badge */
    .badge-sale {
      position: absolute;
      top: 10px;
      left: 10px;
      background: red;
      padding: 5px 10px;
      font-size: 12px;
      border-radius: 5px;
    }

    /* Text */
    .product-title {
      font-size: 18px;
      margin: 10px 0;
    }

    .price {
      color: #0ff;
      font-weight: bold;
      margin-bottom: 10px;
    }

    /* Services */
    .service-card {
      background: #0f172a;
      border-radius: 15px;
      transition: 0.3s;
      box-shadow: 0 0 10px rgba(0, 255, 255, 0.2);
    }

    .service-card:hover {
      transform: translateY(-10px) scale(1.03);
      box-shadow: 0 0 25px rgba(0, 255, 255, 0.7);
    }

    .icon-box {
      font-size: 35px;
      color: #00f5ff;
    }

    .neon-text {
      text-shadow: 0 0 10px cyan;
    }

    /* Event */
    .event-card {
      background: #0f172a;
      border-radius: 15px;
      transition: 0.3s;
      box-shadow: 0 0 10px rgba(0, 255, 255, 0.2);
    }

    .event-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 0 25px rgba(0, 255, 255, 0.7);
    }

    .neon-text {
      text-shadow: 0 0 10px cyan;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg gaming-navbar sticky-top px-2">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand text-neon" href="#">MyGame</a>
      <!-- Menu -->
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active neon-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link neon-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link neon-link" href="#products">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link neon-link" href="#service">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link neon-link" href="#contact">Contact</a>
        </li>
      </ul>

      <?php if (isset($_SESSION['user'])): ?>
        <?php if ($_SESSION['user']['role'] === 'admin'): ?>
          <a href="admin/dashboard.php" class="btn neon-btn me-2">Admin Panel</a>
        <?php endif; ?>

        <span class="me-2"><i>Hello, <?= $_SESSION['user']['name'] ?></i></span>
        <a href="auth/logout.php" class="btn neon-btn">Logout</a>

      <?php else: ?>
        <a href="auth/signin.php" class="btn neon-btn me-2">Signin</a>
        <a href="auth/signup.php" class="btn neon-btn">Signup</a>
      <?php endif; ?>
  </nav>

  <main>
    <!-- HERO SECTION -->
    <section id="home" class="hero">
      <!-- Background Video -->
      <div class="video-bg">
        <video autoplay muted loop playsinline>
          <source src="video/bg_vd.mp4" type="video/mp4">
        </video>
      </div>
      <!-- Content -->
      <div class="hero-content text-center">
        <h1 class="hero-title">
          Build Your Ultimate <span>Gaming Setup</span>
        </h1>
        <p class="hero-subtitle">
          High-performance gear, RGB setups, and pro gaming accessories — all in one place.
        </p>
        <div class="hero-buttons mt-4">
          <a href="#products" class="btn btn-info me-3 px-4">
            Shop Now
          </a>
          <a href="#service" class="btn btn-outline-light px-4">
            Explore Services
          </a>
        </div>
      </div>
    </section>
    <hr style="color:#00f5ff;">

    <!-- Marketing messaging and featurettes
   ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing mt-10">
      <!-- Premium -->
      <section class="about gaming-about py-5" id="about">
        <div class="container">
          <div class="row align-items-center">
            <!-- LEFT CONTENT -->
            <div class="col-lg-6" data-aos="fade-right">
              <span class="badge neon-text neon-badge mb-3"> Gaming Setup Store</span>

              <h1 class="fw-bold text-light mb-3">
                Build Your <span class="neon-text">Ultimate Gaming Setup</span>
              </h1>

              <p class="text-main mb-4">
                Upgrade your battlefield with high-performance gaming gear.
                From RGB keyboards to pro-level headsets, we deliver power,
                style, and performance for every gamer.
              </p>

              <div class="d-flex gap-3 flex-wrap">
                <a href="#products" class="btn neon-btn px-4">
                  Shop Now
                </a>

                <a href="#categories" class="btn btn-outline-light px-4">
                  Browse Gear
                </a>
              </div>
            </div>
            <!-- RIGHT IMAGE -->
            <div class="col-lg-6 text-center mt-4 mt-lg-0" data-aos="fade-left">
              <div class="video-box">
                <video autoplay muted loop playsinline class="img-fluid rounded-4 gaming-video">
                  <source src="video/example.mp4" type="video/mp4">
                </video>
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr style="color:#00f5ff;">

      <!-- Categories -->
      <section class="gaming-categories py-5">
        <h1 class="fw-bold fst-italic text-center neon-text">Categories</h1>
        <div class="container mt-3">
          <div class="row text-center">

            <!-- Category 1 -->
            <div class="col-lg-4 mb-4">
              <img src="/gamingsetup/img/p1.jpg"
                class="rounded-circle mb-3 category-img" alt="Gaming PC">

              <h4 class="text-light neon-text ">Gaming Setup</h4>
              <p class="text-secondary">
                High-performance gaming PCs and complete setups for ultimate gameplay.
              </p>
              <a class="btn btn-outline-info" href="#">Explore</a>
            </div>

            <!-- Category 2 -->
            <div class="col-lg-4 mb-4">
              <img src="/gamingsetup/img/p2.jpg"
                class="rounded-circle mb-3 category-img" alt="Keyboard Mouse">

              <h4 class="text-light neon-text ">Keyboard & Mouse</h4>
              <p class="text-secondary">
                Mechanical keyboards and precision gaming mice with RGB lighting.
              </p>
              <a class="btn btn-outline-info" href="#">Explore</a>
            </div>

            <!-- Category 3 -->
            <div class="col-lg-4 mb-4">
              <img src="/gamingsetup/img/p3.jpg"
                class="rounded-circle mb-3 category-img" alt="Headset">

              <h4 class="text-light neon-text ">Headsets</h4>
              <p class="text-secondary">
                Immersive sound with pro-level gaming headsets and audio gear.
              </p>
              <a class="btn btn-outline-info" href="#">Explore</a>
            </div>

          </div>
        </div>
      </section>
      <hr style="color:#00f5ff;">


      <!-- Products / Gaming Setup -->
      <section id="products" class="products-section py-5">
        <div class="container">
          <h2 class="text-center neon-text mb-5"> Hot Gaming Deals</h2>
          <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-lg-3 col-md-6">
              <div class="gaming-card">
                <div class="card-img-wrapper">
                  <img src="img/hot1.jpg" alt="Keyboard">
                  <span class="badge-sale">SALE</span>
                </div>
                <div class="card-body text-center">
                  <h5 class="product-title neon-text ">RGB Gaming Keyboard</h5>
                  <p class="text-secondary">Mechanical keyboard with RGB lighting.</p>
                  <p class="price">$49.99</p>
                  <button class="btn btn-neon w-100 add-cart">Add to Cart</button>
                </div>
              </div>
            </div>

            <!-- Product 2 -->
            <div class="col-lg-3 col-md-6">
              <div class="gaming-card">
                <div class="card-img-wrapper">
                  <img src="img/hot2.jpg" alt="Mouse">
                  <span class="badge-sale">SALE</span>
                </div>
                <div class="card-body text-center">
                  <h5 class="product-title neon-text ">Gaming Mouse</h5>
                  <p class="text-secondary">High precision gaming mouse.</p>
                  <p class="price">$29.99</p>
                  <button class="btn btn-neon w-100 add-cart">Add to Cart</button>
                </div>
              </div>
            </div>

            <!-- Product 3 -->
            <div class="col-lg-3 col-md-6">
              <div class="gaming-card">
                <div class="card-img-wrapper">
                  <img src="img/hot3.jpg" alt="Headset">
                  <span class="badge-sale">SALE</span>
                </div>
                <div class="card-body text-center">
                  <h5 class="product-title neon-text ">Gaming Headset</h5>
                  <p class="text-secondary">Surround sound gaming headset.</p>
                  <p class="price">$29.99</p>
                  <button class="btn btn-neon w-100 add-cart">Add to Cart</button>
                </div>
              </div>
            </div>

            <!-- Add more products same style -->
            <h2 class="text-center neon-text fw-bold text-info mb-4"> Game Store</h2>
            <div class="container">
              <div class="row g-4">
                <?php
                $stmt = $conn->query("SELECT * FROM products");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                  <div class="col-md-4 col-lg-3">
                    <div class="gaming-card">
                      <div class="card-img-wrapper">
                        <img src="admin/img/<?= $row['image'] ?>" width="100%" alt="loading...">
                      </div>
                      <h5 class="mt-2 text-info"><?= $row['name'] ?></h5>
                      <p class="text-light small flex-grow-1">
                        <?= $row['description'] ?? 'High-performance gaming gear built for speed, precision, and ultimate experience. Perfect for pro gamers and beginners alike.' ?>
                      </p>
                      <p class="price">
                        <?= $row['price'] ?> $
                      </p>
                      <form action="order.php" method="POST">
                        <input type="hidden" name="product_name" value="<?= $row['name'] ?>">
                        <input type="hidden" name="price" value="<?= $row['price'] ?>">
                        <button class="btn-neon w-100">
                          Order Now
                        </button>
                      </form>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr style="color:#00f5ff;">

      <!-- Features -->
      <section id="features" class="py-5">
        <div class="container text-center">
          <h2 class="mb-5 neon-text neon-text">Why Choose Us</h2>

          <div class="row">
            <div class="col-md-4">
              <i class="bi bi-lightning-charge display-4 text-info"></i>
              <h5>Fast Performance</h5>
            </div>

            <div class="col-md-4">
              <i class="bi bi-shield-check display-4 text-info"></i>
              <h5>Trusted Quality</h5>
            </div>

            <div class="col-md-4">
              <i class="bi bi-headset display-4 text-info"></i>
              <h5>24/7 Support</h5>
            </div>
          </div>
        </div>
      </section>
      <hr style="color:#00f5ff;">

      <!-- Services -->
      <section class="service py-5" id="service">
        <h2 class="text-center neon-text text-info fw-bold mb-5">
          Our Gaming Services
        </h2>

        <div class="container">
          <div class="row g-4">

            <!-- Service 1 -->
            <div class="col-md-6 col-lg-3">
              <div class="service-card p-4 text-center h-100">
                <div class="icon-box mb-3">
                  <i class="bi bi-cpu"></i>
                </div>
                <h5 class="text-info fw-bold">Custom PC Build</h5>
                <p class="text-light small">
                  High-performance gaming PCs built for FPS, streaming and pro-level gaming.
                </p>
              </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-6 col-lg-3">
              <div class="service-card p-4 text-center h-100">
                <div class="icon-box mb-3">
                  <i class="bi bi-controller"></i>
                </div>
                <h5 class="text-info fw-bold">Gaming Accessories</h5>
                <p class="text-light small">
                  Premium keyboards, RGB mouse, headsets and gear for ultimate gameplay.
                </p>
              </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-6 col-lg-3">
              <div class="service-card p-4 text-center h-100">
                <div class="icon-box mb-3">
                  <i class="bi bi-tools"></i>
                </div>
                <h5 class="text-info fw-bold">Repair & Upgrade</h5>
                <p class="text-light small">
                  Fast fixing, hardware upgrades and troubleshooting for gaming setups.
                </p>
              </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-6 col-lg-3">
              <div class="service-card p-4 text-center h-100">
                <div class="icon-box mb-3">
                  <i class="bi bi-lightning-charge"></i>
                </div>
                <h5 class="text-info fw-bold">Performance Boost</h5>
                <p class="text-light small">
                  Optimize your system for max FPS, zero lag and smooth gameplay.
                </p>
              </div>
            </div>

          </div>
        </div>
      </section>
      <hr style="color:#00f5ff;"><br>

      <!-- Event -->
      <section class="events py-5" id="events">
        <h2 class="text-center neon-text text-info fw-bold mb-5">
          Upcoming Gaming Events
        </h2>

        <div class="container">
          <div class="row g-4">

            <!-- Event 1 -->
            <div class="col-md-6 col-lg-4">
              <div class="event-card p-3 h-100">
                <img src="img/event1.jpg" class="img-fluid rounded mb-3" alt="">

                <h5 class="text-info fw-bold"> PUBG Tournament</h5>
                <p class="text-light small">
                  Join our weekly PUBG tournament and win exciting gaming gear.
                </p>

                <p class="text-warning mb-2">
                  April 25, 2026
                </p>

                <button class="btn btn-outline-info w-100">
                  Join Event
                </button>
              </div>
            </div>

            <!-- Event 2 -->
            <div class="col-md-6 col-lg-4">
              <div class="event-card p-3 h-100">
                <img src="img/event2.jpg" class="img-fluid rounded mb-3" alt="">

                <h5 class="text-info fw-bold"> Gaming Sale Day</h5>
                <p class="text-light small">
                  Massive discounts on all gaming accessories for 24 hours only.
                </p>

                <p class="text-warning mb-2">
                  May 1, 2026
                </p>

                <button class="btn btn-outline-info w-100">
                  View Deals
                </button>
              </div>
            </div>

            <!-- Event 3 -->
            <div class="col-md-6 col-lg-4">
              <div class="event-card p-3 h-100">
                <img src="img/event3.jpg" class="img-fluid rounded mb-3" alt="">

                <h5 class="text-info fw-bold">New Gear Launch</h5>
                <p class="text-light small">
                  Experience the latest RGB gaming setup before everyone else.
                </p>

                <p class="text-warning mb-2">
                  May 10, 2026
                </p>

                <button class="btn btn-outline-info w-100">
                  Learn More
                </button>
              </div>
            </div>

          </div>
        </div>
      </section>
      <hr style="color:#00f5ff;">

      <!-- Pricing -->
      <section class="py-5">
        <h2 class="text-center neon-text text-info fw-bold mb-5"> Hot Gaming Deals</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4 text-center">

          <!-- Starter Pack -->
          <div class="col">
            <div class="gaming-card p-4 h-100">
              <h4 class="text-info fw-bold"> Starter Pack</h4>

              <h1 class="text-warning my-3">
                50,000 <small class="text-light">MMK</small>
              </h1>

              <ul class="list-unstyled text-light mb-4">
                <li>✔ Gaming Mouse</li>
                <li>✔ Mouse Pad</li>
                <li>✔ Basic Headset</li>
              </ul>

              <button class="btn btn-outline-info w-100 fw-bold">
                Buy Now
              </button>
            </div>
          </div>

          <!-- Pro Gamer -->
          <div class="col">
            <div class="gaming-card p-4 h-100 border border-info">
              <h4 class="text-info fw-bold"> Pro Gamer</h4>

              <h1 class="text-warning my-3">
                120,000 <small class="text-light">MMK</small>
              </h1>

              <ul class="list-unstyled text-light mb-4">
                <li>✔ RGB Keyboard</li>
                <li>✔ Gaming Mouse</li>
                <li>✔ Surround Headset</li>
                <li>✔ Large Mouse Pad</li>
              </ul>

              <button class="btn btn-info w-100 fw-bold">
                Best Deal
              </button>
            </div>
          </div>

          <!-- Ultimate Setup -->
          <div class="col">
            <div class="gaming-card p-4 h-100">
              <h4 class="text-info fw-bold"> Ultimate Setup</h4>

              <h1 class="text-warning my-3">
                250,000 <small class="text-light">MMK</small>
              </h1>

              <ul class="list-unstyled text-light mb-4">
                <li>✔ Mechanical Keyboard</li>
                <li>✔ Pro Gaming Mouse</li>
                <li>✔ 7.1 Headset</li>
                <li>✔ RGB Mouse Pad</li>
                <li>✔ Gaming Stand</li>
              </ul>

              <button class="btn btn-outline-info w-100 fw-bold">
                Go Premium
              </button>
            </div>
          </div>

        </div>
      </section>
      <hr style="color:#00f5ff;">

      <!-- Map  -->
      <section class="section">
        <div class="container">
          <h2 class="text-center neon-text  mb-4">Our Location</h2>
          <div class="map-container">
            <iframe
              src="https://www.google.com/maps?q=Yangon&output=embed">
            </iframe>
          </div>
        </div>
      </section>
      <hr style="color:#00f5ff;">

      <!-- Contact Us -->
      <section class="section" class="contact" id="contact">
        <div class="container">
          <h2 class="text-center neon-text  mb-4">Contact Us</h2>

          <div class="contact-box mx-auto" style="max-width:600px">
            <form>
              <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name">
              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="Enter your Email">
              </div>
              <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea type="text" class="form-control" rows="4" placeholder="Enter your message"></textarea>
              </div>

              <button type="submit" class="btn btn-red w-100">Send Message</button>
            </form>
          </div>
        </div>
      </section><br>
      <hr style="color:#00f5ff;">

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p class="back_to_top float-end"><a href="#">TOP</a></p>
      <p>&copy; 2025-26 PHP project from FangGon.</p>
    </footer>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>