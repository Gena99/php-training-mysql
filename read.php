
<?php
// phpinfo();
$dsn = 'mysql:dbname=reunion_island;host=localhost';
$user = 'root';
$password = 'root';

try {
  $connexion = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
  echo 'Connexion échouée : ' . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Randonnées</title>
  <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
  <h1>Liste des randonnées</h1>
  <table>
   <?php
   $request='SELECT * FROM hiking WHERE 1';
   $result = $connexion->query($request);
   echo '<tr><th>Nom de la randonnée</th><th>Difficulté</th><th>Distance</th><th>Duration</th><th>Dénivelé</th></tr>';
   foreach  ($result as $row) {


    echo '<tr>';
    echo '<td>'  .$row ['name'].'</td>';
    echo '<td>'  .$row ['difficulty'].'</td>';
    echo '<td>'  .$row ['distance'].'</td>';
    echo '<td>'  .$row ['duration'].'</td>';
    echo '<td>'  .$row ['height_difference'].'</td>';
    echo '</tr>';
  }


  ?>    
</table>





</body>
</html>
