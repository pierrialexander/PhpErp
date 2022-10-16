<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="top-margin"></div>
    <div class="loginarea">
        <form method="post">
            <input type="email" name="email" placeholder="Digite seu e-mail">

            <input type="password" name="password" placeholder="Digite sua senha">

            <input type="submit" value="Entrar">

            <?php if(isset($error) && !empty($error)): ?>
                <div class="warning"><?php echo $error; ?></div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>