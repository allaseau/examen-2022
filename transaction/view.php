<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
</head>
<body>
    <form action="" method="POST">
        <div>
            <select name="conctact">
                <?php foreach($contacts as $c) :?>
                    <option value="<?= $c?>" <?= $contacts['nom'] === $c ? 'selected' : ''?>> <?= $c?> </option>
                <?php endforeach ?>    
            </select>
        </div>
        <div>
            <label>
                Montant
                <input type="number" name="montant" value="">
            </label>
        </div>
        <div>
        <?="Today is " . date("Y/m/d") . "<br>";?>
            <input type="date"> 
        </div>
        
    </form>
</body>
</html>