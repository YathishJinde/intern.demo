<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <?php include("./includes/header.php") ?>
  </head>
  <body>
    <div class="container ">
      <?php include("./includes/navbar.php") ?>
        <div class="rows">
            <div class="col-sm-12 col-md-4 mx-auto">
                <!-- Registration form -->

                <div class="card">
                    <h6 class="card-title text-center">Registration</h6>
                    <!-- Registration form code -->
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

                             <!-- number input -->
                             <div class="mb-3">
                                <label class="form-label">Number</label>
                                <input type="number-to-text" class="form-control" placeholder="enter your number"
                                number="number">
                             </div>

                            <!-- name input ends -->
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="p-2">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="inputPassword" name="password">
                        </div>
                        <!-- Confirm Password -->
                        <div class="p-2">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="enter your passoword" id="confirmPassword"
                            name="Confirm Password" onkeyup="verify()">
                            <p id="password" class="text-danger" style="display: none;"></p>
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
        <!-- Custom JavaScript source -->
        <script src="./assessts/Js/New folder/main.js"></script>
  </body>
</html>




























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>