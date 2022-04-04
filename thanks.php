<?php

//  if !empty
if (isset($_POST)) {

    $name = $_POST['name'];
    $prenom = $_POST['prenom'];
    $sujets = $_POST['sujets'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];

}



echo 'Merci ' . $_POST['name'] . ' ' . $_POST['prenom'] . ' de nous avoir contacté à propos de ' . $_POST['sujets'] . '.

        Un de nos conseiller vous contactera soit à l adresse ' . $_POST['mail'] . ' ou par téléphone au ' . $_POST['phone'] . ' dans les plus brefs délais pour traiter votre demande : 
        
        ' . $_POST['message'] . ';


        ?>