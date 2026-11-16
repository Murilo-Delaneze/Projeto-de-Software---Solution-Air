<?php
$email_anterior = $_POST['usuario'] ?? '';
$senha_anterior = $_POST['senha'] ?? '';
$sensor_anterior = $_POST['sensores'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Ambiente - Solutions AR</title>
  <link rel="stylesheet" href="style1.css">  
</head>
<body>

  <div class="navbar">
    <div class="nav-links">
      <a href="#">☰</a>
      <a href="telaInicial.php">🏠</a>
      <a href="#">💬</a>
      <a href="#">📋</a>
      <a href="#">🔔</a>
    </div>
    <div class="nav-search-profile">
      <div class="search-container">
        <input type="text" class="search-input">
        <span class="search-icon">🔍</span>
      </div>
      <div class="profile-icon">👤</div>
    </div>
  </div>

  <div class="main-layout">
    
    <section class="form-section">
      <h2 class="form-header">Cadastro De Ambiente</h2>
      
      <form action="telaInicial.php" method="POST" style="display: contents;">

        <input type="hidden" name="usuario" value="<?php echo ($email_anterior); ?>">
        <input type="hidden" name="senha" value="<?php echo ($senha_anterior); ?>">
        <input type="hidden" name="sensores" value="<?php echo ($sensor_anterior); ?>">
        <div class="form-grid">
          
          <div style="display: flex; flex-direction: column; gap: 20px;">
            <div class="form-group">
              <label>Nome Da Sala:</label>
              <input type="text" name="nome_sala" required>
            </div>
            
            <div class="form-group">
              <label>Localização Da Sala:</label>
              <select id="localizacao" name="localizacao">
                <option value="1">Bloco A - Primeiro Andar</option>
                <option value="2">Bloco A - Segundo Andar</option>
                <option value="3">Bloco B - Primeiro Andar</option>
                <option value="4">Bloco B - Segundo Andar</option>
              </select>
            </div>

            <div class="form-group">
              <label>Canteúdo Da Sala:</label>
              <input type="text" name="conteudo" required>
            </div>

            
          </div>

          <div style="display: flex; flex-direction: column; gap: 20px;">
            <div class="form-group slider-container">
              <label>Temperatura Mínima: <output id="out_temp_min">18</output>°C</label>
              <input type="range" name="temp_min" min="0" max="14" value="18" oninput="document.getElementById('out_temp_min').value = this.value">
            </div>
            
            <div class="form-group slider-container">
              <label>Temperatura Máxima: <output id="out_temp_max">26</output>°C</label>
              <input type="range" name="temp_max" min="15" max="30" value="26" oninput="document.getElementById('out_temp_max').value = this.value">
            </div>
            
            <div class="form-group slider-container">
              <label>Umidade Adequada: <output id="out_umidade">50</output>%</label>
              <input type="range" name="umidade" min="20" max="80" value="50" oninput="document.getElementById('out_umidade').value = this.value">
            </div>
          </div>

        </div>

        <div class="form-footer">
          <button type="button" class="icon-btn" title="Excluir">🗑️</button>
          <button type="submit" class="submit-btn">Cadastrar Sala</button>
          <button type="button" class="icon-btn" title="Editar">✏️</button>
        </div>
      </form>
    </section>

    <nav class="sidebar-menu">
      <a href="#" class="menu-btn">Editar Perfil</a>
      <a href="#" class="menu-btn">Como Funciona</a>
      <a href="#" class="menu-btn active">Cadastro De Ambiente</a>
      <a href="#" class="menu-btn">Meus Ambientes</a>
      <a href="#" class="menu-btn">Parcerias</a>
      <a href="#" class="menu-btn">Sobre Nós</a>
    </nav>

  </div>

</body>
</html>
