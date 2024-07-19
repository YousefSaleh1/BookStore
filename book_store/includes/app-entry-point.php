<?php

function Head($title)
{
  return <<<EOF
      <!DOCTYPE html>
          <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
              <link rel="stylesheet" href="./assets/css/style3.css">
              <title>$title | Programs</title>  
          </head>
          <body>
EOF;
}

function Footer()
{
  return <<<EOF
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
        </body>
        </html>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="assets\js\jsp.js"></script> 

        
EOF;
}
function HomeFooter()
{
  return <<<EOF
  <footer class="bg-dark text-center text-white" style="margin-top:20px;">
          <!-- Grid container -->
          <div class="container p-4 pb-0" style="display: flex !important;>
            <!-- Section: Social media -->
            <section class="footer-icon mb-4" style="display: contents !important;">
              <!-- Facebook -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" style="background:none;border:none;padding: 0;"><ion-icon name="logo-facebook" style="font-size: 37px;margin-right: 20px;"></ion-icon></a>
        
              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" style="background:none;border:none;padding: 0;"><ion-icon name="logo-twitter" style="font-size: 37px;margin-right: 20px;"></ion-icon></a>
        
              <!-- Google -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" style="background:none;border:none;padding: 0;"><ion-icon name="logo-google" style="font-size: 37px;margin-right: 20px;"></ion-icon></a>
              <!-- Instagram -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" style="background:none;border:none;padding: 0;"><ion-icon name="logo-instagram" style="font-size: 37px;margin-right: 20px;"></ion-icon></a>
            </section>
            <!-- Section: Social media -->
          </div>
          <!-- Grid container -->
          <section class="">
            <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                  <!-- Content -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>Book Store
                  </h6>
                  <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum molestias perspiciatis culpa nobis.
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    Products
                  </h6>
                  <p>
                    <a href="#!" class="text-reset">Books</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">scientific books</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">stories</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Novels</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    Useful links
                  </h6>
                  <p>
                    <a href="#!" class="text-reset">Pricing</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Settings</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Orders</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Help</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                  <p><i class="fa fa-home me-3"></i> New York, NY 10012, US</p>
                  <p>
                    <i class="fa fa-envelope me-3"></i>
                    info@example.com
                  </p>
                  <p><i class="fa fa-phone me-3"></i> + 01 234 567 88</p>
                  <p><i class="fa  fa-print me-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          </section>
          <!-- Copyright -->
          <div class="text-center p-3 bg-black" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <p class="text-white">Yousef Saleh</p>
          </div>
          <!-- Copyright -->
  </footer>
EOF;
}

function LogRegNav()
{
  return <<<EOF
    <nav class="LogRegNav navbar navbar-expand-lg fixed-top navbar-scroll">
    <div class="container-fluid">
        <a class="navbar-brand me-2" href="">
            <img
                src="siteimg\logo-removebg-preview.png"
                height="55"
                alt="MDB Logo"
                loading="lazy"
                style="margin-top: -5px;"
            />
            <h1 style="font-size: 29px;font-weight: 600;font-family: initial;margin-left: -10px;margin-top: 5px;">AH Store</h1>

      </a>
      <button class="navbar-toggler" type="button" onclick="myFunction()" data-mdb-toggle="collapse" data-mdb-target="#mytoggler" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-top: -16px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="31" fill="currentColor" class="bi bi-justify" viewBox="1 1 10 10">
        <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
        </svg>
      </button>
      <div class="collapse navbar-collapse" id="mytoggler">
        <ul class="home navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
         
        </ul>

      </div>
    </div>
  </nav>

EOF;
}



function AddNewPNab()
{
  return <<<EOF
    <nav class="UserNav navbar navbar-expand-lg fixed-top navbar-scroll">
    <div class="container-fluid">
        <a class="navbar-brand me-2" href="">
            <img
                src="siteimg\logo-removebg-preview.png"
                height="55"
                alt="MDB Logo"
                loading="lazy"
                style="margin-top: -5px;"
            />
            <h1 style="font-size: 29px;font-weight: 600;font-family: initial;margin-left: -10px;margin-top: 5px;">AH Store</h1>

      </a>
      <button class="navbar-toggler" type="button" onclick="myFunction()" data-mdb-toggle="collapse" data-mdb-target="#mytoggler" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-top: -16px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="31" fill="currentColor" class="bi bi-justify" viewBox="1 1 10 10">
        <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
        </svg>
      </button>
      <div class="collapse navbar-collapse" id="mytoggler">
        <ul class="home navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
        
         
        </ul>
        <ul class="navbar-nav d-flex flex-row">
            <a href="user-page.php" class="add-pro-btn">My Product</a>
            
        </ul>
      </div>
    </div>
  </nav>
EOF;
}



function AdminNav()
{
  return <<<EOF
  <nav class="UserNav navbar navbar-expand-lg fixed-top navbar-scroll">
  <div class="container-fluid">
      <a class="navbar-brand me-2" href="">
        
          <h1 style="font-size: 29px;font-weight: 600;font-family: initial;margin-left: -10px;margin-top: 5px;">AH Store</h1>

    </a>
    <button class="navbar-toggler" type="button" onclick="myFunction()" data-mdb-toggle="collapse" data-mdb-target="#mytoggler" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-top: -16px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="31" fill="currentColor" class="bi bi-justify" viewBox="1 1 10 10">
        <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
        </svg>
      </button>
    <div class="collapse navbar-collapse" id="mytoggler">
      <ul class="home navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
      </ul>
      <ul class="navbar-nav d-flex">
      <a href="add-new-product.php" class="add-pro-btn"><ion-icon name="add-outline" style="font-size:25Spx !important;"></ion-icon> Add New Product</a>
      <a href="includes/API/logout.php" class="add-pro-btn">logout</a>
      </ul>
    </div>
  </div>
</nav>
EOF;
}
