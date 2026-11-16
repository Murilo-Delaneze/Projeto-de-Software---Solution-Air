<?php
$email = $_POST['usuario'] ?? 'Não informado';
$sensor_id = $_POST['sensores'] ?? '';
$nome_sala = $_POST['nome_sala'] ?? 'Não informada';
$localizacao = $_POST['localizacao'] ?? 'Não informada';
$conteudo = $_POST['conteudo'] ?? 'Não informado';
$temp_min = $_POST['temp_min'] ?? '--';
$temp_max = $_POST['temp_max'] ?? '--';
$umidade = $_POST['umidade'] ?? '--';

switch ($sensor_id) {
    case "1": $nome_sensor = "PMS7003"; break;
    case "2": $nome_sensor = "SCD41"; break;
    case "3": $nome_sensor = "AGS10"; break;
    case "4": $nome_sensor = "BMP280"; break;
    case "5": $nome_sensor = "CCS811"; break;
    case "6": $nome_sensor = "MQ-135"; break;
    case "7": $nome_sensor = "DHT11"; break;
    case "8": $nome_sensor = "BMP280"; break;
    default: $nome_sensor = "Não Identificado";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Solutions AR</title>
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

  <div class="container">
    <h1>Bem-Vindo!</h1>

    <div class="dashboard-grid">
      
      <div class="card-info">
          <p><strong>Sala:</strong></p>
          <p><?php echo ($nome_sala); ?></p>

          <p><strong>Localização:</strong></p>
          <p><?php switch ($localizacao) {
                      case 1:
                          echo "Bloco A - Primeiro Andar\n";
                          break;
                      case 2:
                          echo "Bloco A - Segundo Andar\n";
                          break;
                      case 3:
                          echo "Bloco B - Primeiro Andar\n";
                          break;
                      case 4:
                          echo "Bloco B - Segundo Andar\n";
                          break;
                  } ?></p>

          <p><strong>Conteúdo:</strong></p>
          <p><?php echo ($conteudo); ?></p>

          <p><strong>Umidade Adequada:</strong></p>
          <p><?php echo ($umidade); ?>%</p>
      </div>


      <div class="card-temp">
          <div class="temp-section">
              <div class="temp-label">Máx</div>
              <div class="temp-value"><?php echo ($temp_max); ?> °C</div>
          </div>
          <div class="temp-section">
              <div class="temp-label">Min</div>
              <div class="temp-value"><?php echo ($temp_min); ?> °C</div>
          </div>
      </div>

      <div class="device-label">
          Seu Dispositivo: <strong><?php echo ($nome_sensor); ?></strong>
      </div>

    </div>
  </div>

</body>
</html>