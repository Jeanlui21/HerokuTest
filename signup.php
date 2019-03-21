<?php
  require 'db.php';
  $message = '';
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    if ($stmt->execute()) {
      $message = 'Se ha creado su usuario!!!';
    } else {
      $message = 'Lo sentimos pero hubo un percanse en la creación de usuario';
    }
  }
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Panamericanos - Ingreso</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm " id="mainNav">
    <div class="container">
      <span class="navbar-brand js-scroll-trigger">
      <img height="30" src="./assets/panamericano.png"></img> 
    </span>

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
  <i class="fas fa-bars"></i>
  </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Panamericanos 2019</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    
    
    <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto col-md-4 col-sm-4">

<form action="signup.php" method="POST" class="mx-auto py-5 my-5">

<div class="form-group ">
  <label for="email">Correo Electronico</label>
  <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ingrese Correo Electronico">
</div>

<div class="form-group">
  <label for="password">Contraseña</label>
  <input type="password" class="form-control" name="password" placeholder="Contraseña">
</div>

<div class="form-group">
  <label for="confirm_password">Confirmar contraseña</label>
  <input type="password" class="form-control" name="confirm_password" placeholder="Confirmar contraseña">
</div>


<?php if(!empty($message)): ?>
    <small> <?= $message ?></small>
  <?php endif; ?>

<button type="submit" class="btn btn-primary btn-block">Registrarse</button>

<small  class="my-5">o <a href="login.php">Ingresar</a></small>
</form>





      </div>
    </div>
  </header>

 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>