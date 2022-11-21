<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer la fiche d'un groupe</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav id="navigation">
            <a href="index.php" target="_blank">Home</a>
            <a href="create1.php" target="_blank">Create</a>
        </nav>
        <h1>Créer la fiche d'un groupe</h1>
    </header>
    <form action="create1.php" method="post">
        <p>
            <label for="Nom_groupe">Nom: </label>
            <input type="text" name="nom" id="">
        </p>
        <p>
            <label for="Description">Description: </label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </p>
        <p>
            <label for="Cout">Coût :</label>
            <input type="number" name="cout" id="">
        </p>
        <p>
            <label for="Pays"> Pays d'origine: </label>
            <select name="Pays" id="Pays_Origine">
                <option value="France">France</option>
                <option value="Royaume-Uni">Royaume-Uni</option>
                <option value="Etats-Unis">Etats-Unis</option>
                <option value="Canada">Canada</option>
                <option value="Espagne">Espagne</option>
                <option value="Portugal">Portugal</option>
                <option value="Italie">Italie</option>
                <option value="Suisse">Suisse</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Belgique">Belgique</option>
                <option value="Pays-Bas">Pays-Bas</option>
                <option value="Allemagne">Allemagne</option>
                <option value="Irlande">Irlande</option>
                <option value="Finlande">Finlande</option>
                <option value="Danemark">Danemark</option>
                <option value="Suède">Suède</option>
                <option value="Norvège">Norvège</option>
                <option value="Pologne">Pologne</option>
                <option value="République-Tchèque">République-Tchèque</option>
                <option value="Autriche">Autriche</option>
                <option value="Croatie">Croatie</option>
                <option value="Grèce">Grèce</option>
                <option value="Bulgarie">Bulgarie</option>
                <option value="Serbie">Serbie</option>
                <option value="Hongrie">Hongrie</option>
                <option value="Lituanie">Lituanie</option>
                <option value="Lettonie">Lettonie</option>
                <option value="Roumanie">Roumanie</option>
            </select>
        </p>
        <p>
            <label for="Musiciens">Musiciens du groupe:</label>
            <textarea name="musiciens" id="" cols="30" rows="10"></textarea>
        </p>
        <p>
            <label for="Email">Email de contact :</label>
            <input type="email" name="email" id="">
        </p>
        <p>
            <label for="Photo">Photo du groupe:</label>
            <input type="url" name="photo" id="">
        </p>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = "INSERT INTO Groupes (Nom_groupe, Description, Cout, Pays, Musiciens, Email, Photo) VALUES (:nom, :description, :cout, :pays_origine, :musiciens, :email, :photo);";
    $data = [
        "Nom_groupe" => $_POST['nom'],
        "Description" => $_POST['description'],
        "Cout" => $_POST['cout'],
        "Pays" => $_POST['pays_origine'],
        "Musiciens" => $_POST['musiciens'],
        "Email" => $_POST['email'],
        "Photo" => $_POST['photo']
    ];
    print_r($data);
    $hostname = 'localhost:3307';
    $dbname = 'festival';
    $dbuser = 'root';
    $dbpass = '';
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpass);

    $sth = $dbh->prepare($sql);
    $is_successful = $sth->execute($data);

    if ($is_successful) {
        header('Location: index.php');
    }
}
