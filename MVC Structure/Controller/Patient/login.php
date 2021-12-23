<?php session_start(); ?>
<?php require_once('include/config.php'); ?>
<?php if(isset($_SESSION['is_logged_in'])){
  header('Location: '.ROOT_URL);
} ?>
<?php require_once('include/db.php') ;?>
<?php require_once('include/config.php') ;?>
<?php if(isset($_POST['loginForm'])){
   $email = $_POST['email'];
   $pass = $_POST['password'];
   $query = 'SELECT * FROM admin where email="'.$email.'"and password="'.$pass.'"';
   $result = $mysqli->query($query);

   if($result->num_rows > 0){
     $row = $result->fetch_assoc();
    $_SESSION['is_logged_in'] = true;
    $_SESSION['admin_data'] = array(
        'id'=>$row['id'],
        'name'=> $row['name'],
        'email'=>$row['email']

    );
    header('Location: '.ROOT_URL);
   }else{
    echo 'Wrong login info';
   }
  
} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ;?>" method="post" name="" class="form-signin">

  <h1 class="h3 mb-3 font-weight-normal text-white">HMS Login</h1>
  <label  class="sr-only">Email address</label>
  <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" class="form-control" placeholder="Password" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="loginForm">Sign in</button>
</form>
</body>
</html>