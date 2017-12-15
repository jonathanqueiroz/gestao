<style>
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form_login {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form_login input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form_login button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  height: 50px;
  border: 0;
  padding: 10px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form_login button:hover,.form_login button:active,.form_login button:focus {
  background: #43A047;
}
.form_login .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form_login .message a {
  text-decoration: none;
}
.form_login .register-form {
  display: none;
}

</style>

<div class="login-page">
  <div class="form_login">
    <form class="login-form" action="<?php echo base_url('usuario/login'); ?>" method="post">
      <h3 class="login-text">Login</h3>
      <input type="text" placeholder="Email" name="login" focus/>
      <input type="password" name="senha" placeholder="Senha"/>
      <button type="submit" class="waves-effect waves-light blue">Entrar</button>
      <p class="message">Esqueceu a senha? <a href="#">Clique aqui.</a></p>
    </form>
  </div>
</div>