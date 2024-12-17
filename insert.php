<?php
    spl_autoload_register(
        function($fileName) {
            include $fileName . '.class.php';
        }
    );

    $bdd = new PDO('mysql:host=localhost;dbname=blog_poo', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $manager = new Manager($bdd);
    $manager -> getBase();


    $titre = $_POST['titre'];
    $commentaire = $_POST['commentaire'];
    $photo = $_FILES['photo'];
    $url = './images/' . $photo['name'];
    $date = date("d.m.y");
    
    $blog = new Blog($titre, $commentaire, $url, $photo, $date);

    echo 'Titre : ' . $blog->getTitre() . '<br>';
    echo 'Commentaire : ' . $blog->getCommentaire() . '<br>';
    echo 'Photo : ' . $blog->getPhoto() . '<br>';
    echo '<img src="' . $url . '"><br>';
    echo 'Date : ' . $blog->getDate();

    if (move_uploaded_file($photo['tmp_name'], $url . $photo['name'])) {
        echo "<br><br> Fichier téléchargé avec succès !";
    } else {
        echo "<br><br> Erreur de déplacement du fichier.";
    }
?>