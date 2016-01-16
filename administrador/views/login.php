<?php $baseurl="http://www.arturoarellano.com/" ?>
  <div class="container">
    <form class="form-signin" action="<?php echo $baseurl?>administrador/login/dologin" method="POST">
      <h2 class="form-signin-heading">Inicia Sesion</h2>
      <label for="inputEmail" class="sr-only">Usuario</label>
      <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus><br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required><br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar</button>
    </form>
  </div> <!-- /container -->
