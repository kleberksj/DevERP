<html>
<head>
    <title>Cadastrar Motorista</title>
    <link rel="stylesheet" type="text/css" href="motorista.css">
</head>
<body>
    <div class="container">
        <h1>Cadastrar Motorista</h1>
        <form action="process_motorista.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" id="sobrenome" name="sobrenome" required>
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="text" id="idade" name="idade" required>
            </div>
            <div class="form-group">
                <label for="cnh">CNH:</label>
                <input type="text" id="cnh" name="cnh" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <select id="categoria" name="categoria">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
            </div>
            <div class="form-group">
                <label for="vencimento">Data de Vencimento:</label>
                <input type="date" id="vencimento" name="vencimento" required>
            </div>
            <div class="button-group">
                <button type="submit" class="save-button">Salvar</button>
                <button type="reset" class="reset-button">Cadastrar Novamente</button>
                <!-- Link para sub.php na pasta "sistema" -->
                <a href="../../sistema/sub.php" class="sub-button">Home</a>



            </div>
        </form>
    </div>
</body>
</html>
