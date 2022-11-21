<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <nav id="navigation">
      <a href="index.php" target="_blank">Home</a>
      <a href="create1.php" target="_blank">Create</a>
    </nav>
    <h1>Découvrez des groupes</h1>
  </header>
  <main id="pageContent">
    <div class="wrapper">
      <ul>
        <div class="one">
          <li>
            <a href="show.php" target="_blank"><img src="https://images.rtl.fr/~c/1155v769/rtl/www/1332096-adam-santa-et-line-membres-du-groupe-hyphen-hyphen.jpg" alt="Photo du groupe Hyphen Hyphen"></a>
            <h2>Hyphen Hyphen</h2>
          </li>
        </div>
        <div class="two">
          <li>
            <a href="show.php" target="_blank"><img src="https://img.nrj.fr/0w3iN4ERzU-q6znZ7ocnWkXaBsk=/800x450/smart/medias%2F2021%2F10%2F6156e7a3d84c8_6156e7a7db401.png" alt="Photo du groupe The Beatles"></a>
            <h2>The Beatles</h2>
          </li>
        </div>
      </ul>
    </div>
  </main>
</body>

</html>

<?php

// TODO : Externaliser ces variables dans un autre fichier.
// Connection à la BDD
$hostname = 'localhost:3307';
$dbname = 'festival';
$dbuser = 'root';
$dbpass = '';
$dbh = new PDO("mysql:host=$hostname; dbname=$dbname", $dbuser, $dbpass);


// Lecture des groupes au sein de la BDD
$sth = $dbh->prepare("SELECT * FROM groupes;");
$sth->execute();
$groupes = $sth->fetchAll();

// Affichage des groupes
foreach ($groupes as $groupe) {
  echo "<h1>", $groupe['Nom_groupe'], "</h1>";
  echo "<p>", $groupe['Description'], "</p>";
  echo "<img src='", $groupe['Photo'], "'>";
}
