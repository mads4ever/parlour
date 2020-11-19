<?php session_start();   include('header.php'); 

  if (!isset($_SESSION['user']))
  {
    echo "<script type='text/javascript'>document.location.href='login.php';</script>";
    exit(0);
  }
  $key_id = "rzp_test_eQq17G2oyxrsTU";
  $amount = 100 * 100;
  $servername = "localhost";
    $username = "Aniket";
    $password = "Aniket1004";
    $dbname = "parlour";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if ($conn)
    {
        $query = "select * from customer where email='$_SESSION[user]';";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_row($result);
       
    }
?>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light grey lighten-2 z-depth-3">

  <div class="container">

    <a class="navbar-brand py-0" href="#">ABC</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Links -->
      <ul class="navbar-nav mr-auto text-uppercase font-weight-normal">
        <li class="nav-item">
          <a class="nav-link" href="user.php">Get Started</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tutorial.php">Tutorial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pricing.php">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="help.php">Help</a>
        </li>

        <li class="nav-item avatar dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg-right dropdown-dark"
            aria-labelledby="navbarDropdownMenuLink-55">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="code.php?logout=t">Logout</a>
            
          </div>
        </li>

      </ul>
      <!-- Links -->
      <?php 
        if ($row[6] == 0)
        {
      ?>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        
        <li class="nav-item">
        <form action="payment.php" method="POST"><script    
          src="https://checkout.razorpay.com/v1/checkout.js"    
          data-key=<?php echo $key_id; ?> // Enter the Test API Key ID generated from Dashboard → Settings → API Keys    
          data-amount=<?php echo $amount ?> // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.    
          data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account    
          data-buttontext="Buy Subscription"    
          data-name="MADS"    
          data-description="Payment to mads"    
          data-image="https://example.com/your_logo.jpg"    
          data-prefill.name="Gaurav Kumar"    
          data-prefill.email=<?php echo $_SESSION['user']; ?>    
          data-theme.color="#F37254"></script>
          <input type="hidden" custom="Hidden Element" name="hidden">
        </form>
        </li>

      </ul>
      <?php
        }
      ?>
    </div>
    <!-- Collapsible content -->

  </div>

</nav>
<!--/.Navbar-->

<!--Main Layout-->
<main class="text-center py-5 mt-3 grey lighten-5">
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <h5 style="font-weight:500;">  Introduction </h5>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lN4g_ANtcYE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
            </div>
            <div class="col-md-6">
                <h5 style="font-weight:500;">  Tutorial 1 </h5>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lN4g_ANtcYE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
            </div>
            <?php 
                if ($row[6] == 1)
                {
                  $query1 = "select * from course_video;";
                  $result1 = mysqli_query($conn,$query1);

                  while($row1 = mysqli_fetch_row($result1))
                  {
            ?>
                  <div class="col-md-6">
                    <h5 style="font-weight:500;"><?php echo $row1[2]; ?> </h5>
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe width="560" height="315" src="<?php echo $row1[5]; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <p style="font-weight:200;">Description : <?php echo $row1[3]; ?></p>
                    <small style="font-weight:380;">Published at :<?php echo $row1[4]; ?></small>
                  </div>
            <?php
                  }
                  
                }
            ?>
        </div>
    </div>

</main>
<!--Main Layout-->


<?php include('footer.php'); ?>