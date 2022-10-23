<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel - <?php echo $viewData['company_name']; ?></title>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/template.css">
</head>
<body>

    <!-- MENU LATERAL -->
    <div class="leftmenu">
        <div class="company_name">
            <?php echo $viewData['company_name']; ?>
        </div>
        <!-- AREA DO MENU -->
        <div class="menuarea">
            <ul>
                <a href="<?php echo BASE_URL; ?>"><li><i class="fa-solid fa-house"></i>Home</li></a>
                <a href="<?php echo BASE_URL; ?>/permissions"><li><i class="fa-solid fa-user-shield"></i>Permissões</li></a>
            </ul>
        </div>
    </div>

    <!-- CONTAINER PRINCIPAL -->
    <div class="container">

        <!-- BARRA DO TOPO -->
        <div class="top">
            <div class="top_right"><a href="<?php echo BASE_URL . '/login/logout'; ?>">Sair</a></div>
            <div class="top_right"><?php echo $viewData['email']; ?></div>
        </div>
        
        <!-- AREA PRINCIPAL -->
        <div class="area">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div>

    </div>

</body>
</html>