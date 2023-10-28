<!DOCTYPE html>
<html>
<head>
    <title>Sistema ERP - Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h1>Bem-vindo ao Sistema ERP</h1>
        <form action="process_login.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name "senha" required>
            </div>
            <div class="button-group">
                <button type="submit" class="login-button">Logar</button>
                <button type="button" class="password-button">Trocar Senha</button>
                <a href="../home.php" class="home-button">Home</a>
            </div>
        </form>
    </div>
</body>
</html>

