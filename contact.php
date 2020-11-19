<?php include('header.php') ?>
</head>
<style>
.intro-2 {
    background: url("assets/brush.jpg")no-repeat center center;
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
                    <li class="nav-item active">
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
                    <a href="signup.php" type="button" class="btn btn-outline-black btn-rounded btn-sm" style="font-weight:900;">Sign up Free!</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="view intro-2 z-depth-2">
        <div class="full-bg-img">
            <div class="mask rgba-indigo-slight flex-center">
                <div class="container">
                <br>
            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-5 mb-lg-0 pb-lg-3 mb-4">

                <!-- Form with header -->
                <div class="card">
                    <div class="card-body">
                    <!-- Header -->
                    <div class="form-header">
                        <h3 class="mt-2"><i class="fas fa-envelope"></i> Contact to us:</h3>
                    </div>
                    <!-- Body -->
                    <div class="md-form">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text" id="form-name" class="form-control">
                        <label for="form-name">Your name</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="text" id="form-email" class="form-control">
                        <label for="form-email">Your email</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-tag prefix grey-text"></i>
                        <input type="text" id="form-Subject" class="form-control">
                        <label for="form-Subject">Subject</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-pencil-alt prefix grey-text"></i>
                        <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                        <label for="form-text">Send message</label>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-light-blue">Submit</button>
                    </div>
                    </div>
                </div>
                <!-- Form with header -->

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