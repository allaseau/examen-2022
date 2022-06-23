<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Blanc</title>
</head>
<body>
    <ul>
    <?php foreach ($transactions as $t) :?>
        <li>
            <a href="./liste/index.php">
                <?= $t['date']?>
            </a>
        </li>
    <?php endforeach ?>
    </ul>
        <button><a href="./transaction/index.php"> Effectuer une transaction</a></button>
</body>
</html>