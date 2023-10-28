<!DOCTYPE html>
<html>
<head>
    <title>Cadastre o Veículo</title>
    <link rel="stylesheet" type="text/css" href="veiculo.css">
</head>
<body>
    <div class="container">
        <h1>Cadastre o Veículo</h1>
        <form action="process_veiculo.php" method="post">
            <div class="form-group">
                <label for="placa">Placa:</label>
                <input type="text" id="placa" name="placa" required>
            </div>
            <div class="form-group">
                <label for="renavan">Número de RENAVAN:</label>
                <input type="text" id="renavan" name="renavan" required>
            </div>
            <div class="form-group">
                <label for="nome_veiculo">Nome do Veículo:</label>
                <input type="text" id="nome_veiculo" name="nome_veiculo" required>
            </div>
            <div class="form-group">
                <label for="tipo_veiculo">Tipo de Veículo:</label>
                <select id="tipo_veiculo" name="tipo_veiculo" required>
                    <option value="Caminhão 1 eixo">Caminhão 1 eixo</option>
                    <option value="Caminhão 2 eixos">Caminhão 2 eixos</option>
                    <option value="Sprinter">Sprinter</option>
                </select>
            </div>
            <div class="form-group">
                <label for="caminhao_eixos">Caminhão 1 ou 2 eixos:</label>
                <input type="checkbox" id="caminhao_eixos" name="caminhao_eixos">
            </div>
            <div class="button-group">
                <button type="submit" class="save-button">Salvar</button>
                <button type="button" class="new-button">Cadastrar Novo</button>
                <a href="../../sistema/sub.php" class="sub-button">Home</a>
            </div>
        </form>
    </div>
</body>
</html>
