<?php 
if(isset($_POST)){
    $name=$_POST['name'];
    $domaine=$_POST['domaine'];
    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "PNG" => "image/PNG", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["image"]["name"];
        $filetype = $_FILES["image"]["type"];
        $filesize = $_FILES["image"]["size"];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Erreur : Seuls les images sont acceptées."); 
        $maxsize = 500 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");
        if(in_array($filetype, $allowed)){
            if(file_exists("upload/" . $_FILES["image"]["name"])){
              $_SESSION['error']= $_FILES["image"]["name"] . " existe déjà.";
            } else{
                move_uploaded_file($_FILES["image"]["tmp_name"],$_FILES["image"]["name"]);
                $_SESSION['success']= "Votre fichier a été téléchargé avec succès.";
            } 
        } else{$_SESSION['error']= "Error: Il y a eu un problème de téléchargement de votre image. Veuillez réessayer.";  }
    } else{ $_SESSION['error']= "Error: " . $_FILES["photo"]["error"]; }
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=base;charset=utf8', 'root', '1234'); // se connecter à la base de données
        $sqlQuery = 'INSERT INTO universites(nom,domaine,image) VALUES (:nom,:domaine,:image)';// Ecriture de la requête
        $insert = $mysqlClient->prepare($sqlQuery);  // Préparation
        $insert->execute([ // Exécution
          'nom' => $name ,
          'domaine' => $domaine,
          'image' => $filename, ]);
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
  }
header("Location: app.php", true, 301); exit(); ?>
  
 