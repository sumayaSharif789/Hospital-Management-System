<?php require_once('include/db.php') ;?>
<?php require_once('include/config.php') ;?>
<?php require_once('include/session.php') ;?>
<?php require_once('include/header.php') ;?>

<main role="main" class="container">
  <div class="jumbotron mt-5">
    <h1>Welcome</h1>
    <p class="lead">Alpha Hospital</p>
    <a class="btn btn-primary" href="appointments.php" role="button">Appointment List </a>
   <a class="btn btn-danger" href="doctors.php" role="button">Doctor List</a>
  </div>
</main>

<?php require_once('include/footer.php') ;?>