<?php

if (isset($transaction['emetteur'])){
    $emetteur = get_contact_by_id(strtoupper($transaction['emetteur']));
}
if (isset($transaction['destinataire'])){
    $destinataire = get_contact_by_id(strtoupper($transaction['destinataire']));
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
        <li>
            <?php 
            foreach($transactions as $transaction){
                if($transaction['montant'] < 0){                
                    echo $destinataire ['nom'];
                    echo $destinataire ['prenom'];
                }else{
                    echo $emetteur ['nom'];
                    echo $emetteur ['prenom'];
                }
            }
            ?>
        </li>
</body>
</html>