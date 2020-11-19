<?php session_start(); include('header.php') ?>
</head>
<style>
.intro-2 {
    background: url("assets/login.jpg")no-repeat center center;
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

    <nav class="navbar navbar-expand-lg navbar-dark">
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
                    <li class="nav-item">
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
                    <a href="signup.php" type="button" class="btn btn-outline-white btn-rounded btn-sm" style="font-weight:900;">Sign up</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="view intro-2 z-depth-2">
        <div class="full-bg-img">
            <div class="mask rgba-indigo-slight flex-center">
            <div class="container">
                <blockquote class="blockquote bq-danger text-white" style="font-size:38px; font-weight:700;">Sign In</blockquote>
            <br>
            <!--Grid row-->
            <div class="row d-flex align-items-center">
            <!--Grid column-->
            <div class="col-md-6 col-xl-5">
                <!--Form-->
                <div class="card">
                <div class="card-body z-depth-4 px-4">
                <?php
                       if(isset($_SESSION['lwarning']))
                       {
                    ?>
                    <p><small style="color:red;"><?php echo $_SESSION['lwarning']; ?></small></p>
                    <?php
                        unset($_SESSION['lwarning']);
                       }
                    ?>
              <!-- Form -->
              <form class="text-center" style="color: #757575;" action="code.php" method="post">
                <br>
                <br>
                <!-- Name -->
                <input type="email" id="defaultSubscriptionFormPassword" name="email" class="form-control mb-4" placeholder="Email">
                <?php
                       if(isset($_SESSION['lemailWarning']))
                       {
                    ?>
                    <p><small style="color:red;"><?php echo $_SESSION['lemailWarning']; ?></small></p>
                    <?php
                        unset($_SESSION['lemailWarning']);
                       }
                    ?>
                <!-- Email -->
                <input type="password" id="defaultSubscriptionFormEmail" name="password" class="form-control" placeholder="Password">
              <!--  <small id="passwordHelpBlock" class="form-text text-right blue-text">
                  <a href="">Recover Password</a>
                </small>
              -->
              <?php
                       if(isset($_SESSION['lpasswordWarning']))
                       {
                    ?>
                    <p><small style="color:red;"><?php echo $_SESSION['lpasswordWarning']; ?></small></p>
                    <?php
                        unset($_SESSION['lpasswordWarning']);
                       }
                    ?>
                <div class="text-center">
                  <button type="submit" class="btn btn-outline-purple z-depth-2 btn-rounded my-4 waves-effect" name="loginSubmit">Sign in</button>
                </div>
                <p>Don't have account ? <a href="signup.php">Sign Up</a></p>
              </form>
              <!-- Form -->

                </div>
                </div>
                <!--/.Form-->
            </div>
            <!--Grid column-->
            </div>
            <!--Grid row-->

            </div>
            </div>
        </div>
    </div>

</header>
<!--Main Navigation-->

<?php include('footer.php') ?>