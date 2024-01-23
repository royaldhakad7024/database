<?php 
$output="";
$output1= "";
if(($_SERVER['REQUEST_METHOD']) ==='POST'){
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $rpwd = $_POST['rpwd'];
    if($pwd !== $rpwd){
        $output = "password doesn't match";
    }
    else{
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mydb";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if(mysqli_connect_error()){
            die("Connection Failed: ". mysqli_connect_error());
        }
        $sql = "UPDATE myguests set pwd ='$pwd' where email = '$email'";
        if(mysqli_query($conn, $sql)){
            $output1 = "password changed successfully";
            header("location:login_page.php");
        }
        else{
            $output1 = "Error updating record: ". $mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-2 col-5">
        
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Retype-Password</label>
                <input type="password" name="rpwd" class="form-control" id="exampleInputPassword1">
                <?php echo $output; ?>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <?php echo $output1; ?>
        </form>
    </div>
    

  </body>
</html>