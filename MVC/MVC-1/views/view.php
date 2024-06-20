
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container my-4">
        <a href="ajouter.php" class="btn btn-success btn-sm link float-end">Ajouter</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">LABELLE</th>
      <th scope="col">QUANTITE</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($listeArticle as $article ){
            ?>
            <tr>
                <td><?php echo $article['id']?></td>
                <td><?php echo $article['libelle']?></td>
                <td><?php echo $article['quantite']?></td>
            </tr>
            <?php
        }
            ?>
        

        
        
  </tbody>
</table>
    </div>

</body>
</html>