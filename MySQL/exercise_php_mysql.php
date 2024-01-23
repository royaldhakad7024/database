
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }
        .img-fluid{
            height: 100%;
            width: 100%;
        }
        .card-registration .select-arrow {
        top: 13px;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <section class="h-100 bg-dark">
          <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col">
                      <div class="card card-registration my-4">
                          <div class="row g-0">
                              <div class="col-xl-6 d-none d-xl-block">
                                  <img src="https://avatars.mds.yandex.net/i?id=f7d7be3aebf3007d809b143bf05430c770c8746c-9293428-images-thumbs&n=13"
                                  alt="Sample photo" class="img-fluid"
                                  style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                </div>
                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase">Student registration form</h3>
                                        <form action="" method="post">
                                            <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                <input type="text" name="firstname" id="form3Example1m" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1m">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                <input type="text" name="lastname" id="form3Example1n" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1n">Last name</label>
                                                </div>
                                            </div>
                                            </div>

                
                                            <div class="row">
                                            <div class="form-outline mb-4">
                                              <input type="text" name= "email" id="form3Example97" class="form-control form-control-lg" />
                                              <label class="form-label" for="form3Example97">Email ID</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                              <input type="password" name= "password" id="form3Example97" class="form-control form-control-lg" />
                                              <label class="form-label" for="form3Example97">Password</label>
                                            </div>
                                            </


                                            <div class="d-flex justify-content-end pt-3">
                                              <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                                            </div>

                                            <div>
                                              <a href="login_page.php">Have already registered? login here</a>
                                            </div>
                                        </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    </body>
</html>
<?php 
if(($_SERVER['REQUEST_METHOD']) ==="POST"){
    $name = $_POST["firstname"];
    $last = $_POST["lastname"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

}

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_error()) {
    die("Connection Failed: ". mysqli_connect_error());

}
$sql = "INSERT into MyGuests(firstname, lastname, email, pwd)
VALUES('$name', '$last', '$email', '$pwd')";
if(mysqli_query($conn, $sql)){
  echo "Insert row successfully: ";
}
else{
  echo  mysqli_error($conn);
}
mysqli_close($conn);
?>