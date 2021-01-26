<!DOCTYPE html>
<html>
<head>
	<title>Silahkan Login untuk masuk ke dalam sistem</title>
	<link rel="stylesheet" type="text/css" href="Test.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
  <body>
  	<?php
	echo $status;
	?>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">Tolong untuk <span class="font-weight-bold text-primary">Login</span></h5></div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="form-group">
                  <input id="username" type="text" name="username" class="form-control" required="REQUIRED" placeholder="Masukan Username Anda">
                </div>
                <hr>
                <div class="form-group">
                  <input id="password" type="password" name="password" class="form-control" required="REQUIRED" placeholder="Masukan Password Anda">
                </div>
                <hr>
                <div class="form-group">
                  <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block">
                </div>
                 <div class="form-group">
                  <input type="reset" name="reset" value="Reset" class="btn btn-primary btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>