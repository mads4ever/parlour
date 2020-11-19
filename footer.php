<!-- Footer -->
<footer class="page-footer font-large unique-color-dark pt-4">
  <?php
      if (!isset($_SESSION['user']))
      {
  ?>
  <!-- Footer Elements -->
  <div class="container">

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center animated slideInRight delay-2s slow py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Register for free</h5>
      </li>
      <li class="list-inline-item">
        <a href="signup.php" class="btn btn-outline-white btn-rounded">Sign up!</a>
      </li>
    </ul>
    <!-- Call to action -->

  </div>
  <!-- Footer Elements -->
  <?php
      }
   ?>
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center animated slideInUp">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-2">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-instagram mx-1">
          <i class="fab fa-instagram"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->


  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 animated slideInLeft delay-2s slow">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> abc.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

    <!-- Script -->
    <script type="text/javascript" src="modules/mdbootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="modules/mdbootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="modules/mdbootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="modules/mdbootstrap/js/mdb.min.js"></script>
    </body> 
</html>