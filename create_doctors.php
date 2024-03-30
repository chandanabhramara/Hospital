<!DOCTYPE html>
<html lang="en">

<head>

  <title>Intern</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>



  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Intern</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link active" href="admin.php">Home</a></li>
          <li><a class="nav-link " href="create_doctors.php">Doctors</a></li>
          <li><a class="nav-link " href="view_enquiry.php">Enquiry</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

 

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    
    <section class="inner-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 align="center">
              Welcome Admin - Create Doctors
            </h1><hr/>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          <form action="backend2.php" method="get" role="form" >
             
          <div class="form-group mt-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="category" id="category" placeholder="Enter Expertise in" required>
              </div>
              <div class="form-group mt-3">
                <label>Upload Profile pic</label>
                <input type="file" class="form-control" name="profile" id="profile" required>
              </div>
              
              <div class="form-group mt-3">
                <textarea class="form-control" name="description" rows="5" placeholder="Enter Description" required></textarea>
              </div>
            
              <div class="text-center"><button type="submit">Create Doctor</button></div>
            </form>
          </div>
        </div>
        
       

      </div>
    </section>

  </main><!-- End #main -->




  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>