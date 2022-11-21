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
    </header>
    <main id="pageContent">

        <form action="edit.php">
            <input type="submit" value="Modifier">
        </form>

        <form action="delete.php">
            <input type="submit" value="Supprimer">
        </form>
    </main>
</body>

</html>

<?php
$hostname = 'localhost:3307';
$dbname = 'festival';
$dbuser = 'root';
$dbpass = '';
$dbh = new PDO("mysql:host=$hostname; dbname=$dbname", $dbuser, $dbpass);

$sth = $dbh->prepare("SELECT * FROM groupes;");
$sth->execute();
$groupes = $sth->fetchAll();

// Affichage des groupes
foreach ($groupes as $groupe) {
    echo "<h1>", $groupe['Nom_groupe'], "</h1>";
    echo "<p>", $groupe['Description'], "</p>";
    echo "<img src='", $groupe['Photo'], "'>";
    echo "<p>", $groupe['Musiciens'], "<p>";
    echo "<p>", $groupe['Cout'], "<p>";
    echo "<p>", $groupe['Email'], "<p>";
    echo "<p>", $groupe['Pays'], "<p>";
}


?>