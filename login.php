<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <?php include("./includes/header.php") ?>
    <link rel="stylesheet" href="./assessts/Css/main.css" class="styleshett">
  </head>
  <body class="log">
    <?php include("./includes/navbar.php") ?>
    <div class="container ">
        <div class="rows">
            <div class="col-sm-12 col-md-4 mx-auto">
                <!-- Login form -->

                <div class="card">
                    <h6 class="card-title text-center">Login</h6>
                    <!-- Login form code -->
                    <hr>
                    <form>
                        <div class="p-2">
                            <!-- name input -->
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="enter your name"
                                name="name">
                            </div>
                             <!-- name input ends  -->

                            <!-- name input ends -->
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="p-2">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                      

                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1" placeholder="enter your email adress">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary ">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>





























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>