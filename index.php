<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css"> 
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/ad295b8459.js" crossorigin="anonymous"></script>
 
    <title>M.Arvin Saskoro 048</title>
  </head>
  <body>
    <div class="container">
        <h2 class="text-center">LOGIN</h2>
        <form action="user.php" method="POST">
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6">
                <img class="logo ml-5" src="image/logo_cafe.png" alt="logo Coffee House">
              </div>
              <div class="col-sm-5">
                <label for="username">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                  </div>
                  <input type="text" class="form-control" name="username" id="username" required="required" placeholder="Masukkan Username">
                </div>

                <label for="password" style="padding-top: 10px">Password</label>
                <div class="input-group">
                  <div class="input-group-prepend">  
                    <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                  </div> 
                  <input type="password" class="form-control" name="password" id="password" required="required" placeholder="Masukkan Password">
                </div>
              </div>
            </div> 
          </div>
          <button type="submit" class="btn btn-outline-primary  mt-5 ml-4" name="proseslog">LOGIN</button>
          <button type="reset" class="btn btn-outline-danger mt-5 ml-5">CLEAR</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    
  </body>
</html>