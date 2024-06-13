<html>
<style>
h1{
  background-color:white;
  background-position: center;
  width: 800px;
}
.pp{
  background-color:white;
  width: 200px;
  align:center;
}
html{
  clear:both;
}
.dropdown-content {
  right: 0;
}
/* Style The Dropdown Button */
.dropbtn {
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown-link:hover{
  background-color: beige;
}
/* Change the background color of the dropdown button when the dropdown content is shown */

</style>

<script src="https://kit.fontawesome.com/73ec6837c8.js" crossorigin="anonymous"></script>
    <!-- Bootstrap and popper CDN Links -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="image/diy.jpg">


    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
<div class="container collapse navbar-collapse">
  <a class="navbar-brand" href="#">DIY Lab</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <!--
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      -->
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li>
        
      </li>
    </ul>
<div class="dropdown">
  <button class="dropbtn btn btn-outline-warning">Services</button>
  <div class="dropdown-content">
    <a href="membership.php" class = "dropdown-link">Membership</a>
    <a href="workshop.php" class = "dropdown-link">Workshops</a>
    <a href="machines.php" class = "dropdown-link">Machines</a>
  </div>
</div>
</div>
</nav>

<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="fw-light shadow">You can make almost anything at the DIY Lab</h1>
        <p class="lead shadow pp">Build, Break, Innovate</p>
      </div>
    </div>
  </div>
</header>
<script>
    //$(document).ready(function() {
    // Scroll to the element with the class 'box' when the document is ready
    //$('html, body').animate({
        //scrollTop: $('.container').offset().top
    //}, 2000); // Adjust the duration (2000 milliseconds) as needed
//});
</script>
</html>