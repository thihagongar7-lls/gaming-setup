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

  <style>
    body {
      padding-bottom: 3rem;
      color: var(--text-main);
      background-color: var(--bg-dark);
    }

    /* Carousel base class */
    .carousel {
      margin-bottom: 4rem;
    }

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
      bottom: 3rem;
      z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
      height: 32rem;
    }

    .carousel-item>img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 32rem;
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
  </style>
</head>

<body>

  <!-- Bootstrap + Google Font (optional gaming font) -->
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <nav class="navbar navbar-expand-lg gaming-navbar sticky-top px-4">
    <div class="container-fluid">

      <!-- Logo -->
      <a class="navbar-brand text-neon" href="#">🎮 MyGame</a>

      <!-- Menu -->
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active neon-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link neon-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link neon-link" href="#sale">Sale</a>
        </li>
        <li class="nav-item">
          <a class="nav-link neon-link" href="#service">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link neon-link" href="#contact">Contact</a>
        </li>
      </ul>

      <!-- SignIn Button -->
      <a href="signin.php" class="btn neon-btn">Signin</a>

      <!-- Sign Up Button -->
      <a href="signup.php" class="btn neon-btn">Sign Up</a>

    </div>
  </nav>

  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" src="img/ex1.png" alt="Loading..." />

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Example headline.</h1>
              <p>Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" src="img/ex1.png" alt="Loading..." />

          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" src="img/ex1.png" alt="Loading..." />

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <hr><br><br>



    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Premium -->
      <section class="about" id="about">
        <div class="row justify-content-center text-center">
          <div class="col-lg-8">
            <div class="headline-block" data-aos="zoom-in" data-aos-delay="100">
              <span class="tagline">Premium Collection</span>
              <h1 class="main-heading">Elevate Your Everyday Style</h1>
              <p class="lead-text">Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
              <div class="cta-group" data-aos="fade-up" data-aos-delay="200">
                <a href="#products" class="btn-explore">Explore Collection</a>
                <a href="#categories" class="btn-outline-explore"><i class="bi bi-grid me-2"></i>View Categories</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr>

      <!-- Three columns of text below the carousel -->
      <section>
        <div class="row">
          <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            </svg>

            <h2>Heading</h2>
            <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            </svg>

            <h2>Heading</h2>
            <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            </svg>

            <h2>Heading</h2>
            <p>And lastly this, the third column of representative placeholder content.</p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div>
      </section>
      <hr><!-- /.row -->

      <!-- Cards -->
      <section class="sale" id="sale">
        <h2>Have a nice Shopping!</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <img src="img/ex1.png" class="card-img-top"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                alt="Loading..." alt="Loading...">

              <div class="modal fade" id="exampleModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div>
                    <div class="modal-header">
                      <h5 class="modal-title">Card Detail</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" style="background-color: orange;"></button>
                    </div>

                    <div class="modal-body">
                      <h1>Heading</h1>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex, quod?</p>
                      <a href="details.html">
                        <button type="button" class="btn btn-primary">Details ></button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body" style="background-color:cornflowerblue;">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="img/ex1.png" class="card-img-top"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                alt="Loading..." alt="Loading...">

              <div class="modal fade" id="exampleModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div>
                      <h5 class="modal-title">Card Detail</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" style="background-color: orange;"></button>
                    </div>

                    <div class="modal-body">
                      <h1>Heading</h1>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex, quod?</p>
                      <a href="details.html">
                        <button type="button" class="btn btn-primary">Details ></button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body" style="background-color:cornflowerblue;">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="img/ex1.png" class="card-img-top"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                alt="Loading..." alt="Loading...">

              <div class="modal fade" id="exampleModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div>
                      <h5 class="modal-title">Card Detail</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" style="background-color: orange;"></button>
                    </div>

                    <div class="modal-body">
                      <h1>Heading</h1>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex, quod?</p>
                      <a href="details.html">
                        <button type="button" class="btn btn-primary">Details ></button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body" style="background-color:cornflowerblue;">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="img/ex1.png" class="card-img-top"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                alt="Loading..." alt="Loading...">

              <div class="modal fade" id="exampleModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div>
                      <h5 class="modal-title">Card Detail</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" style="background-color: orange;"></button>
                    </div>

                    <div class="modal-body">
                      <h1>Heading</h1>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex, quod?</p>
                      <a href="details.html">
                        <button type="button" class="btn btn-primary">Details ></button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body" style="background-color:cornflowerblue;">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="img/ex1.png" class="card-img-top"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                alt="Loading..." alt="Loading...">

              <div class="modal fade" id="exampleModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div>
                      <h5 class="modal-title">Card Detail</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" style="background-color: orange;"></button>
                    </div>

                    <div class="modal-body">
                      <h1>Heading</h1>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex, quod?</p>
                      <a href="details.html">
                        <button type="button" class="btn btn-primary">Details ></button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body" style="background-color:cornflowerblue;">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="img/ex1.png" class="card-img-top"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                alt="Loading..." alt="Loading...">

              <div class="modal fade" id="exampleModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div>
                      <h5 class="modal-title">Card Detail</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" style="background-color: orange;"></button>
                    </div>

                    <div class="modal-body">
                      <h1>Heading</h1>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex, quod?</p>
                      <a href="details.html">
                        <button type="button" class="btn btn-primary">Details ></button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body" style="background-color:cornflowerblue;">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
        </div>
      </section><br>
      <hr>

      <!-- Services -->
      <section class="service" id="service">
        <h2>What you think?</h2>
        <div class="container my-3">
          <div class="service-box p-5">
            <h2 class="mb-4">Our Gaming Services 🎮</h2>
            <hr>

            <!-- Service Item -->
            <div class="service-item d-flex mb-4">
              <div class="icon-box me-4">
                <i class="bi bi-cpu"></i>
              </div>
              <div>
                <h4 class="title">PC Building</h4>
                <p>We build high-performance custom gaming PCs tailored to your needs.</p>
              </div>
            </div>

            <!-- Service Item -->
            <div class="service-item d-flex mb-4">
              <div class="icon-box me-4">
                <i class="bi bi-controller"></i>
              </div>
              <div>
                <h4 class="title">Gaming Accessories</h4>
                <p>Top-quality keyboards, mouse, headsets and more for pro gamers.</p>
              </div>
            </div>

            <!-- Service Item -->
            <div class="service-item d-flex mb-4">
              <div class="icon-box me-4">
                <i class="bi bi-tools"></i>
              </div>
              <div>
                <h4 class="title">Repair Service</h4>
                <p>Fast and reliable repair service for PCs and gaming consoles.</p>
              </div>
            </div>

            <!-- Service Item -->
            <div class="service-item d-flex mb-4">
              <div class="icon-box me-4">
                <i class="bi bi-lightning"></i>
              </div>
              <div>
                <h4 class="title">Performance Boost</h4>
                <p>Optimize your system for maximum FPS and smooth gameplay.</p>
              </div>
            </div>

          </div>
        </div>
      </section><br>

      <!-- Pricing -->
      <section>
        <h2>Suitable Prizing?</h2>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal" style="color: #000;">Free</h4>
              </div>
              <div class="card-body" style="color: #000;">
                <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>10 users included</li>
                  <li>2 GB of storage</li>
                  <li>Email support</li>
                  <li>Help center access</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal" style="color: #000;">Pro</h4>
              </div>
              <div class="card-body" style="color: #000;">
                <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>20 users included</li>
                  <li>10 GB of storage</li>
                  <li>Priority email support</li>
                  <li>Help center access</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
              <div class="card-header py-3 text-white bg-primary border-primary">
                <h4 class="my-0 fw-normal" style="color: #000;">Enterprise</h4>
              </div>
              <div class="card-body" style="color: #000;">
                <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>30 users included</li>
                  <li>15 GB of storage</li>
                  <li>Phone and email support</li>
                  <li>Help center access</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Map  -->
      <section class="section">
        <div class="container">
          <h2 class="text-center mb-4">Our Location</h2>
          <div class="map-container">
            <iframe
              src="https://www.google.com/maps?q=Yangon&output=embed">
            </iframe>
          </div>
        </div>
      </section>

      <!-- Contact Us -->
      <section class="section" class="contact" id="contact">
        <div class="container">
          <h2 class="text-center mb-4">Contact Us</h2>

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

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2025-26 PHP project from FangGon.</p>
    </footer>
  </main>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>