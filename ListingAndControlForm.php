<?php
//Déclaration d'un tableau afin de boucler les valeur du select 'civilité'
$civilityAsso = array(0 => 'Veuillez choisir votre sexe', 1 => 'Monsieur', 2 => 'Madame', 3 =>'Autre');
//Déclaration des valeur de validation, dont 0 est valide est 1 n'est pas valide
$civil = 2;
$lName = 2;
$fName = 2;
$sty = 2;
$AGE = 2;
//Déclaration de variable regex qui serviront de condition de validation
$regName = '/^[a-zA-Zéàèêîôç\- ]+$/';
$regAge = '/^[\d]{1,2}$/';
$regSociety = '/^[a-zA-Z0-9éàèêîôç\- ]+$/';
$formError = array();
//Déclaration de variable enregistrant les données transmises
if (isset($_POST['submit'])) {
    //Introduction des valeurs remplies par l'utilisateur dans des variables
    $civilityContent = (isset($_POST['civility'])) ? $_POST['civility'] : '';
    $lastName = htmlspecialchars(isset($_POST['lastName'])) ? $_POST['lastName'] : '';
    $firstName = htmlspecialchars(isset($_POST['firstName'])) ? $_POST['firstName'] : '';
    $age = htmlspecialchars(isset($_POST['age'])) ? $_POST['age'] : '';
    $society = htmlspecialchars(isset($_POST['society'])) ? $_POST['society'] : '';
    //Condition permettant de passer d'une vue à l'autre en fonction de si on a validé le formulaire ou non 
    if (!empty($civilityContent) && array_key_exists('civility',$_POST)) {
        //Array_key_exists sert à vérifier l'index d'un tableau (ici dans le tableau $_POST de civility)
        //Si les conditions sont bonnes, on passe dans la vue d'affichage des valeurs remplies
        $civil = 1;
        //Condition d'erreur si jamais la valeur grisée par défaut avait été selectionnée
    } else {
        $civil = 0;
        $formError['civility'] = 'Vous n\'avez pas sélectionné votre civilité';
    }
    if (!empty($lastName) && preg_match($regName, $lastName)) {
        //Si les conditions sont bonnes, on passe dans la vue d'affichage des valeurs remplies
        $lName = 1;
    } else {
        //Autrement, nous restons dans la vue actuelle, celle où le formulaire demande toujours les valeurs à remplir
        $lName = 0;
        $formError['lastName'] = 'La saisie de votre nom est vide ou incorrecte';
    }
    if (!empty($firstName) && preg_match($regName, $firstName)) {
        //Si les conditions sont bonnes, on passe dans la vue d'affichage des valeurs remplies
        $fName = 1;
    } else {
        //Autrement, nous restons dans la vue actuelle, celle où le formulaire demande toujours les valeurs à remplir
        $fName = 0;
        $formError['firstName'] = 'La saisie de votre prénom est vide ou incorrecte';
    }
    if (!empty($age) && preg_match($regAge, $age)) {
        //Si les conditions sont bonnes, on passe dans la vue d'affichage des valeurs remplies
        $AGE = 1;
    } else {
        //Autrement, nous restons dans la vue actuelle, celle où le formulaire demande toujours les valeurs à remplir
        $AGE = 0;
        $formError['age'] = 'La saisie de votre age est vide ou incorrecte';
    }
    if (!empty($society) && preg_match($regSociety, $society)) {
        //Si les conditions sont bonnes, on passe dans la vue d'affichage des valeurs remplies
        $sty = 1;
    } else {
        //Autrement, nous restons dans la vue actuelle, celle où le formulaire demande toujours les valeurs à remplir
        $sty = 0;
        $formError['society'] = 'La saisie de votre société est vide ou incorrecte';
    }
}
?>