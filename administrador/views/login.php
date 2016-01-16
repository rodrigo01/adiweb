  <div class="container">
    <form action="<?php echo $baseurl?>login/dologin" method="POST">
      <h2 class="form-signin-heading">Inicia Sesion</h2>
      <label for="inputEmail" class="sr-only">Usuario</label>
      <input name="username" type="text" id="inputEmail" class="form-control" size="35" placeholder="Usuario" required autofocus><br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input name="password" type="password" id="inputPassword" class="form-control" size="30" placeholder="Password" required><br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar</button>
    </form>
  </div> <!-- /container -->
