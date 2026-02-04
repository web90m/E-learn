<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web Based Short Term Training System</title>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

/* Smooth Scroll */
html { scroll-behavior: smooth; }

/* Navbar */
.navbar { transition: all 0.4s; }
.navbar .nav-link:hover { color:rgb(61, 255, 7) !important; }

/* Hero Section (Responsive Background Improved) */
.hero {
  height: 100vh;
  background:
    linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
    url('java.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  display:flex;
  align-items: center;
  justify-content: center;
  text-align:center;
  color:#fff;
  overflow:hidden;
}

.hero h1 {
  font-size: 4rem;
  font-weight: 800;
  text-shadow: 2px 2px 15px rgba(0,0,0,0.7);
  animation: slideDown 1.5s ease-out;
}
.hero p {
  font-size: 1.5rem;
  margin-top:15px;
  text-shadow:1px 1px 5px rgba(0,0,0,0.7);
  animation: fadeIn 2s ease-out;
}
.hero .btn {
  margin-top:30px;
  animation: fadeIn 3s ease-out;
}

@keyframes slideDown {
  0% { transform: translateY(-50px); opacity:0; }
  100% { transform: translateY(0); opacity:1; }
}
@keyframes fadeIn {
  0% { opacity:0; }
  100% { opacity:1; }
}

/* Mobile Optimization */
@media(max-width: 768px){
  .hero {
    background-attachment: scroll;
    height: 75vh;
  }
  .hero h1{ font-size:2.4rem; }
  .hero p{ font-size:1.2rem; }
}

/* Footer */
footer a:hover { color:#ffc107; transition:0.3s; }

img{
width:75px;
height:80px;
border-radius:30px;
}


/*contact*/
#contact input, 
#contact textarea {
    border-radius: 10px;
}

#contact .form-control:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 5px rgba(13, 110, 253, 0.4);
}




</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
  <img src="dot.jpg" alt="image">
<div class="container-fluid">
  <a class="navbar-brand fw-bold" href="#"><i class="fas fa-laptop-code"></i> Web Training Ambo University</a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link fw-semibold" href="#home"><i class="fas fa-home"></i> Home</a></li>
      <li class="nav-item"><a class="nav-link fw-semibold" href="#about"><i class="fas fa-info-circle"></i> About</a></li>
      <li class="nav-item"><a class="nav-link fw-semibold" href="#contact"><i class="fas fa-envelope"></i> Contact</a></li>

      <li class="nav-item">
        <a class="nav-link fw-semibold" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
          <i class="fas fa-sign-in-alt"></i> Login
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link fw-semibold" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">
          <i class="fas fa-user-plus"></i> Register
        </a>
      </li>
    </ul>
  </div>
</div>
</nav>

<!-- Hero Section -->
<section class="hero" id="home">
  <div class="container text-center">
    <h1>Welcome to Web Based Short Term Training</h1>
    <p>Interactive, responsive, and modern UI system</p>
    <a href="#about" class="btn btn-warning btn-lg"><i class="fas fa-arrow-down"></i> Learn More</a>
  </div>
</section>

<!-- About Section -->
<section class="py-5" id="about">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">About The System</h2>
    <p class="text-center">This system provides short term training with modern UI, login system, trainer/trainee roles, and a responsive learning environment.</p>
  </div>
</section>

<!-- Contact Section -->
<!-- Contact Section -->
<section id="contact" class="py-5 bg-light">
  <div class="container">

    <h2 class="text-center mb-4 fw-bold">
      <i class="fas fa-envelope text-primary"></i> Contact Us
    </h2>
    <p class="text-center mb-5 text-muted">
      We are here to support you. Reach out to us anytime.
    </p>

    <div class="row g-4 justify-content-center">

      <!-- Contact Info -->
      <div class="col-lg-5 col-md-6 col-sm-10">
        <div class="p-4 bg-white shadow rounded h-100">

          <h5 class="fw-bold mb-3">Get in Touch</h5>

          <p><i class="fas fa-map-marker-alt text-primary"></i> Ambo University, Ethiopia</p>
          <p><i class="fas fa-envelope text-primary"></i> iyasu4313@gmail.com</p>
          <p><i class="fas fa-phone text-primary"></i> +251 943 133 184</p>
          <p><i class="fab fa-telegram text-primary"></i> @Milkibm</p>
          <p><i class="fab fa-telegram text-primary"></i> @Mediashow4313 (Channel)</p>

          <hr>

          <h6 class="fw-bold">Working Hours</h6>
          <p class="mb-1"><i class="fas fa-clock text-success"></i> Mon – Fri: 8:00 AM – 5:00 PM</p>
          <p><i class="fas fa-clock text-danger"></i> Sat – Sun: Closed</p>

        </div>
      </div>


     
</section>


<!-- Footer -->
<footer class="bg-dark text-white py-4">
  <div class="container">
    
    <div class="row">

      <!-- Left Section -->
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold text-warning">Vision</h5>
        <p>
          To deliver high-quality, accessible, and industry-focused short-term training 
          that empowers learners with practical digital skills.
        </p>

        <h5 class="fw-bold text-warning mt-3">Mission</h5>
        <p>
          To provide a modern, interactive, and fully online learning environment  
          that supports trainees, trainers, and administrators through smart technology.
        </p>
      </div>

      <!-- Middle Section -->
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold text-warning">Web Developers</h5>
        <p class="mb-1"><i class="fas fa-user"></i>  Apo Website</p>
        <p class="mb-1"><i class="fas fa-user"></i>  Milkias B.M</p>
        <p class="mb-1"><i class="fas fa-user"></i>  Your Team Members (Add more)</p>

        <h5 class="fw-bold text-warning mt-3">Contact</h5>
        <p class="mb-1"><i class="fas fa-envelope"></i>  iyasu4313@gmail.com</p>
        <p class="mb-1"><i class="fas fa-phone"></i>  0943133184</p>
      </div>

      <!-- Right Section -->
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold text-warning">Follow Us</h5>
        <a href="#" class="text-white me-3 fs-4"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-white me-3 fs-4"><i class="fab fa-telegram"></i></a>
        <a href="#" class="text-white me-3 fs-4"><i class="fab fa-github"></i></a>

        <hr class="border-light">

        <p class="small">&copy; <?= date('Y'); ?> Web Based Training System<br>
        All rights reserved.</p>
      </div>

    </div>

  </div>
</footer>


<!-- Display Messages -->
<div class="container mt-3">
<?php
if(isset($_SESSION['success'])){
    echo '<div class="alert alert-success">'.$_SESSION['success'].'</div>';
    unset($_SESSION['success']);
}
if(isset($_SESSION['error'])){
    echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
    unset($_SESSION['error']);
}
?>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header bg-success text-white">
  <h5 class="modal-title"><i class="fas fa-sign-in-alt"></i> Login</h5>
  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">
<form method="post" action="login.php">
  <input type="email" name="email" placeholder="Email" class="form-control mb-3" required>
  <input type="password" name="password" placeholder="Password" class="form-control mb-3" required>
  <select name="role" class="form-control mb-3" required>
    <option value="" disabled selected>Select Role</option>
    <option value="admin">Admin</option>
    <option value="trainer">Trainer</option>
    <option value="trainee">Trainee</option>
  </select>
  <button type="submit" class="btn btn-success w-100"><i class="fas fa-sign-in-alt"></i> Login</button>
</form>
</div>

</div>
</div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header bg-primary text-white">
  <h5 class="modal-title"><i class="fas fa-user-plus"></i> Register</h5>
  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">
<form method="post" action="register.php" id="registerForm">
  <input type="text" name="name" placeholder="Full Name" class="form-control mb-3" required pattern="^[A-Za-z\s]{5,20}$">
  <input type="email" name="email" placeholder="Email" class="form-control mb-3" required>
  <input type="password" name="password" placeholder="Password" class="form-control mb-3" required>
  <select name="role" class="form-control mb-3" required>
    <option value="" disabled selected>Select Role</option>
    <option value="admin">Admin</option>
    <option value="trainer">Trainer</option>
    <option value="trainee">Trainee</option>
  </select>
  <button type="submit" class="btn btn-primary w-100"><i class="fas fa-user-plus"></i> Register</button>
</form>
</div>

</div>
</div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
