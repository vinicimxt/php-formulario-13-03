<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ação php</title>
</head>
<body>
    <?php
    if($_POST['email']=="admin@email.com"){
        ?>

    
        Bem vindo,  <?php echo $_POST['nome'] ;?>
        <br>
        Seu E-mail é <?php echo  $_POST ['email'];?>
        <?php
    } else {
        echo "E-mail inválido";
    }
    ?>
</body>
</html>