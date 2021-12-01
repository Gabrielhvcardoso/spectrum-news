<div id="login-page">
  <div class="cube" style="align-self: center;">
    <div class="top cf"></div>
    <div class="sides">
      <span style="--i: 0" class="cf"></span>
      <span style="--i: 1" class="cf"></span>
      <span style="--i: 2" class="cf"></span>
      <span style="--i: 3" class="cf"></span>
    </div>
    <div class="bottom cf"></div>
  </div>
  
  <form id="login-card" method="POST">
    <input required name="login" type="text" placeholder="Usuário" />
    <input required name="password" name="password" type="password" placeholder="Palavra-passe" />

    <?php
      if (!empty($_POST["login"]) && !empty($_POST["password"])) {
        ?>
          <small class="form-error">Não foi possível entrar usando essas credenciais</small>
        <?php
      }    
    ?>

    <footer>
      <button>Voltar para o site</button>
      <button type="submit" class="primary">Entrar</button>  
    </footer>
  </form>
</div>