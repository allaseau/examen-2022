<?php

if (isset($transaction['emetteur'])){
    $emetteur = get_contact_by_id(strtoupper($transaction['emetteur']));
}
if (isset($transaction['destiantaire'])){
    $emetteur = get_contact_by_id(strtoupper($transaction['emetteur']));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste transactions</title>
</head>
<body>
    <?php foreach ($contacts as $c): ?>
        <li>
            <?= ($c['nom']) ?>
            <?= ($c['prenom']) ?>
            <?= ($c['compte']) ?>
        </li>
    <?php endforeach;?>

</body>
</html>