<?php

require 'index.php';

//prepare method
$statement = $pdo->prepare('DELETE FROM centre WHERE id = :id');



$statement->execute([
    ':id'=> 4    
]);


