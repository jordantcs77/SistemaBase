<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="login.php">My Company</a>
    </nav>
    <form class="form-signin" method="post" action="validar.php">
    
      <h1 class="h3 mb-3 font-weight-normal">Inicio de sesion</h1>
      <input type="text" id="inpuTtext" class="form-control" placeholder="Ingrese Usuario" name="txt_usuario">
      <input type="password" id="inputPassword" class="form-control"  placeholder="Password" name="txt_pass">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordarme
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <button class="btn btn-lg btn-danger btn-block" type="reset">Cancelar</button>
                    <!-- FOOTER -->
      <footer class="container">
       <center> <p>© <?php echo date("Y"); ?>  Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p> </center>
      </footer>
    </form>

  </body>
</html>