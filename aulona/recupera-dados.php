<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $nome = $_POST['txNome'];
        $email = $_POST['txEmail'];

        echo "$nome <br />";
        echo $email;
    ?>
    
</body>
</html>