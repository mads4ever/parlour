<?php
    session_start();
    include('header.php'); 
?>
</head>
<style>
.intro-2 {
    background: url("assets/signup.jpg")no-repeat center center;
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
                    <a href="login.php" type="button" class="btn btn-outline-black btn-rounded btn-sm" style="font-weight:900;">Sign in</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="view intro-2 z-depth-2">
        <div class="full-bg-img">
            <div class="mask rgba-indigo-slight flex-center">
            <div class="container">
                <blockquote class="blockquote bq-success" style="font-size:38px;">Sign Up</blockquote>
            <br>
            <!--Grid row-->
            <div class="row d-flex align-items-center">
            <!--Grid column-->
            <div class="col-md-6 col-xl-5">
                <!--Form-->
                <div class="card">
                <div class="card-body z-depth-4 px-4">
                    <?php
                       if(isset($_SESSION['warning']))
                       {
                    ?>
                    <p><?php echo $_SESSION['warning']; ?></p>
                    <?php
                        unset($_SESSION['warning']);
                       }
                    ?>
                    <form method="post" action="code.php">
                    <div class="md-form mt-3">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" name="fullname" id="form3" class="form-control">
                    <label for="form3">Your name</label>
                    </div>
                    <?php
                       if(isset($_SESSION['nameWarning']))
                       {
                    ?>
                    <p><small style="color:red;"><?php echo $_SESSION['nameWarning']; ?></small></p>
                    <?php
                        unset($_SESSION['nameWarning']);
                       }
                    ?>
                    <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="form2" name="email" class="form-control">
                    <label for="form2">Your email</label>
                    </div>
                    <?php
                       if(isset($_SESSION['emailWarning']))
                       {
                    ?>
                    <p><small style="color:red;">
                    <?php 
                        echo $_SESSION['emailWarning']."   "; 
                        if (strpos($_SESSION['emailWarning'],"Invalid"))
                        {
                    ?>
                            <i class="fas fa-times-circle">  </i>
            
                    <?php
                        }
                    ?>
                        </small>
                        </p>
                    <?php
                        unset($_SESSION['emailWarning']);
                       }
                    ?>
                    <div class="md-form">
                    <i class="fa fa-phone prefix grey-text"></i>
                    <input type="text" id="form1" name="mobile" class="form-control">
                    <label for="form1">Your mobile </label>
                    </div>
                    <?php
                       if(isset($_SESSION['mobileWarning']))
                       {
                    ?>
                    <p><small style="color:red;"><?php 
                        echo $_SESSION['mobileWarning']."   "; 
                        if (strpos($_SESSION['mobileWarning'],"Invalid")!== false)
                        {
                    ?>
                            <i class="fas fa-times-circle">  </i>
            
                    <?php
                        }
                    ?>
                        </small>
                        </p>
                    <?php
                        unset($_SESSION['mobileWarning']);
                       }
                    ?>
                    <div class="md-form">
                    <i class="fas fa-key prefix grey-text"></i>
                    <input type="password" id="form4" name="password" class="form-control">
                    <label for="form4">Your password</label>
                    </div>
                    <?php
                       if(isset($_SESSION['passwordWarning']))
                       {
                    ?>
                    <p><small style="color:red;"><?php echo $_SESSION['passwordWarning']; ?></small></p>
                    <?php
                        unset($_SESSION['passwordWarning']);
                       }
                    ?>
                    <div class="text-center my-3">
                    <button type="submit" name="registerSubmit" class="btn btn-indigo btn-block">Register</button>
                    </div>
                    <p>Already have account ? <a href="login.php">Sign in</a></p>
                    </div>
                    </form>
                    
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