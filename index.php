<?php include('header.php') ?>
</head>
<style>
.intro-2 {
    background: url("assets/try.jpg")no-repeat center center;
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

    <nav class="navbar navbar-expand-lg navbar-light z-depth-3">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>Navbar</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
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
                    <div class="white-text text-center wow fadeInUp animated zoomIn delay-1s">
                        <h2>This Navbar isn't fixed</h2>
                        <h5>When you scroll down it will disappear</h5>
                        <br>
                        <p>Full page intro with background image will be always displayed in full screen mode, regardless of device </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!--Main Navigation-->


<?php include('footer.php') ?>