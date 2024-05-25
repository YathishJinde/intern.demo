<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-Commerce</title>
  <?php include ("./includes/header.php") ?>
  </head>
  <!-- Dark theme -->
  <body data-bs-theme="dark">
    <div class="form-check form-switch mx-4">
      <input
      class="form-check-input p-2"
      type="checkbox"
      role="switch"
      id="flexSwitchCheckChecked"
      checked
      onclick="myFunction()"
    </div>
    <!-- Dark theme ends -->
    <script>
      function myFunction() {
        var element=document.body;
        element.dataset.bsTheme =
        element.dataset.bsTheme == "light" ? "dark" : "light";

      }
    </script>
    <!-- Dark and Light theme ends -->

    <!-- nav bar start -->
   <?php include ("./includes/navbar.php") ?>
    <!-- nav bar end -->

    <!-- Section 1 Start-->

<div class="container-fluid section-1 ">
<div class="row">
    <div class="col-sm-12 col-md-6 d-flex flex-column align-self-center">
      <h1 class="section-1-heading text-center text-white">Welcome to Yj E-Commerece </h1>
      <a href="#products" class="btn btn-light">Exlplore our products</a>
    </div>
    <div class="col-sm-12 col-md-6">
      <dotlottie-player class="mx-auto" src="https://lottie.host/1e4fb3a8-8aa7-47e2-b633-10c9e83fac94/zzPVF5hRfi.json" 
      background="transparent" speed="1" style="width: 600px; height: 600px;" loop autoplay></dotlottie-player>
    </div>
  </div>
</div>

    <!-- Section 1 end -->
    <hr>
    <!-- Section 2 Start -->

    <div class="container">
        <div class="row">
            <h2 class="text-dark text-center">Categories</h2>
            <!-- Categories card 1 Start-->
            <div class="col-sm-12 col-md-4">
              <div class="card">
                <img src="assessts/images/cosemtics.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Cosmetics</h5>
                  <ul>
                    <li> Eyeliner </li>
                    <li> Creams </li>
                    <li> Foundation </li>
                    <li> Lipstick </li>
                    <li> Sunscreen </li>
                  </ul>
                  <p class="card-text"></p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <!-- categories card 1 end -->
             <!-- Categories card 1 Start-->
             <div class="col-sm-12 col-md-4">
              <div class="card">
                <img src="assessts/images/electronics.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Electronics</h5>
                  <ul>
                    <li> Moblies </li>
                    <li> Laptops </li>
                    <li> Cameras </li>
                    <li> Tablets </li>
                    <li> Lens </li>
                  </ul>
                  <p class="card-text"></p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <!-- categories card 1 end -->
             <!-- Categories card 1 Start-->
             <div class="col-sm-12 col-md-4">
              <div class="card">
                <img src="assessts/images/image3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Home Appliences</h5>
                  <ul>
                    <li> Fridge </li>
                    <li> Washing Machine </li>
                    <li> Grinder </li>
                    <li> Ovens</li>
                    <li> Plates </li>
                  </ul>

                  <p class="card-text"></p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <!-- categories card 1 end -->


            <div class="container">
              <div class="row">
                  <h2 class="text-dark text-center">PRODUCTS</h2>
                  <!-- Categories card 1 Start-->
                  <div class="col-sm-12 col-md-4">
                    <div class="card">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                  <!-- categories card 1 end -->
                   <!-- Categories card 1 Start-->
                   <div class="col-sm-12 col-md-4">
                    <div class="card">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                  <!-- categories card 1 end -->
                   <!-- Categories card 1 Start-->
                   <div class="col-sm-12 col-md-4">
                    <div class="card">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>

        </div>
        </div>
        <h1 class="section-1-heading text-center text-white"> 
        </h1>


        
       
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
      
      <!-- lottie Script -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    
    <!-- Custom JavaScript source -->
    <script src="./assessts/Js/New folder/main.js"></script>
  </body>
</html>
