<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d339dc2285.js" crossorigin="anonymous"></script>
</head>
    <body>
        <div class="container" style="margin-top:40px">
            <div class="jumbotron">
                <h1><?php echo $__env->yieldContent('cabecalho'); ?></h1>
            </div>
            <?php echo $__env->yieldContent('conteudo'); ?>
        </div>
    </body>
</html><?php /**PATH /home/darley/gccc/resources/views/layout.blade.php ENDPATH**/ ?>