<?php
require 'index.php' ;
//prepare method
$statement = $pdo->prepare('SELECT * FROM centre ');

$statement->execute();

$results =$statement->fetchAll(PDO::FETCH_ASSOC);

echo '</pre>';
var_dump($results);
echo '</pre>';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($results as $result):?>
    <div class="N1">
        <h3><?php $results['nomC'];?></h3>
        <p><?php $results['vilC'];?></p>
    </div>
    <?php endforeach;?>

</body>
</html>