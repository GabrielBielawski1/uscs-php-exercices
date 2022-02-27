<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processa_formulario.php" method="post">
        <label>E-mail</label><br>
        <input type="email" name="txtEmail" placeholder="Informe seu email"><br>
        <label>Senha</label><br>
        <input type="password" name="txtSenha">
        <br>
        <input type="submit" value="Entrar" name="btnEntrar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>