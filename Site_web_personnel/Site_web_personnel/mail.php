<?php

try
{
    require "credentials.php";
    $username = 'root';
    $password = 'root';
    $bd= new PDO('mysql:host=localhost;dbname=site_web', $username, $password);
    $bd->query("SET NAMES 'utf8'");
    $bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur !!!! : '.$e->GetMessage());
}
 

    if(!empty($_POST)) {
    $Nom = htmlspecialchars($_POST['nom']);
    $Prenom = htmlspecialchars($_POST['prenom']);
    $Mail = htmlspecialchars($_POST['email']);   
    $Sujet = htmlspecialchars($_POST['sujet']);
    $Message = htmlspecialchars($_POST['message']); 


    if(!empty($Nom) AND !empty($Prenom) AND !empty($Mail) AND !empty($Sujet) AND !empty($Message) AND preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$Mail))
    {
        $requete = $bd->prepare("INSERT INTO mail(nom, mail, sujet, message, date_envoie) VALUES(:nom, :mail, :sujet, :message, NOW())");
        $tableau = [$Nom,$Prenom, $Mail, $Sujet, $Message];

        foreach ($requete as $key => &$val) {
            $req->bindParam($key, $val);
        }
        $req->execute();
        $result = $req-fetchall();

 
        $header="MIME-Version: 1.0\r\n";
        $header.='From: ' . $Nom . "  " . $Prenom . '<' . $Mail . '>' . '."\n"';
        $header.='Content-Type:text/html; charset="utf-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
 
        mail("brunella.andria@gmail.com", $Sujet, $Message, $header);

       
    }

    }   

    header("Location:submit_contact.php");


 
?>
            