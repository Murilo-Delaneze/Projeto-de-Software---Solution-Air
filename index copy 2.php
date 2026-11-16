<?php
$email_anterior = $_POST['usuario'] ?? '';
$senha_anterior = $_POST['senha'] ?? '';
$sensor_anterior = $_POST['sensores'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Solutions AR - Login/Cadastro</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>

  <div class="container">
    <div class="banner">
      <img src="imagem do site.png" alt="Ar Condicionado Solutions AR">
    </div>

    <div class="form-container">
      <div class="logo">
        <img src="Logo.jpg" alt="Solutions AR Logo">
      </div>

      <div class="card-form">
        <div class="tabs"> 
          <a href="index.html" class="tab-btn active">Cadastrar</a>  
        </div>

        <form action="telaCadastro2.php" method="POST">
          <div class="input-group">
            <label>Número de celular ou email:</label>
            <input type="email" name="usuario" required>
          </div>

          <div class="input-group">
            <label>Senha:</label>
            <input type="password" name="senha" minlength="8" required>
          </div>

          <button type="submit" class="submit-btn">Criar Conta</button>
        </form>
      </div>
    </div>
  </div>

</body>
</html>

<?php
if (condition) {
  # code...
}
?>