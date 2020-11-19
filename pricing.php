<?php include('header.php') ?>
</head>
<style>
.intro-2 {
    background: url("assets/pricing.jpg")no-repeat center center;
    background-size: cover;
}
.view {
    margin-top: -56px;
}
.navbar {
    z-index: 1;
    background-color: transparent;
}
.top-nav-collapse {
    background-color: #4285F4;
}
@media only screen and (max-width: 768px) {
    .navbar {
        background-color: #4285F4;
    }
}
html,
body,
header,
.view {
    height: 100%;
}
</style>
<body>
<!--Main Navigation-->
<header>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>Navbar</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="pricing.php">Pricing</a>
                    </li>
                </ul>
                <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-instagram"></i></a>
                </li>
                </ul>
                <ul></ul>
                <ul class="navbar-nav ">
                <li class="list-inline-item">
                    <a href="signup.php" type="button" class="btn btn-outline-black btn-rounded btn-sm" style="font-weight:900;">Sign up free !</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="view intro-2 z-depth-2">
        <div class="full-bg-img">
            <div class="mask rgba-indigo-slight flex-center">
            <div class="container">
    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-6 col-md-12 mb-4">

        <!-- Card -->
        <div class="pricing-card">

          <!-- Content -->
          <div class="card-body">
            
            <h6 class="font-weight-bold text-uppercase mb-4">FREE</h6>

            <!-- Price -->
            <p class="display-3 font-weight-normal">&#8377 0</p>
            <br>
            <ul class="mb-0">
              <li>
                <p><strong>Free demo trial</strong></p>
              </li>
            </ul>
            <br>
            <a class="btn btn-outline-primary btn-md btn-rounded" href="signup.php">Get started</a>

          </div>
          <!-- Content -->

        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-6 col-md-6 mb-4">

        <!-- Card -->
        <div class="pricing-card">

          <!-- Content -->
          <div class="card-body">
            
            <h6 class="font-weight-bold text-uppercase blue-text mb-4">Paid course</h6>

            <!-- Price -->
            <p class="display-3 font-weight-normal">&#8377 10000</p>
            <br>
            <ul class="mb-0">
              <li>
                <p><strong>Paid course videos</strong></p>
              </li>
            </ul>
            <br>
            <a class="btn btn-primary btn-md btn-rounded">Buy now</a>

          </div>
          <!-- Content -->

        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

            </div>
            </div>
        </div>
    </div>

</header>
<!--Main Navigation-->

<?php include('footer.php') ?>