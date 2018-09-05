<?php include 'ListingAndControlForm.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>TP 2</title>
    </head>
    <body>
        <!--Formulaire d'enregistrement d'utilisateur-->
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-6">
                    <form id="register" method="POST" action="#" class="form-group">
                    <!--Champs civilité-->
                        <label for="civility">Civilité: </label>
                            <!--Condition en ternaire pour afficher une étoile en vert ou en rouge selon la valeur de l'input-->
                            <?php echo ($civil == 1 ) ? '<span class="ok">*</span>' : '';echo (($civil == 0) || ($civil == 2)) ? '<span class="starError">*</span>' : ''; ?>
                            <!--Select civilité-->
                                <select class="form-control" name="civility" id="civility">
                                    <option selected disabled>Veuillez choisir votre civilité</option>
                                    <option value="1" <?= ((!empty($civilityContent)) && ($civilityContent == 1)) ? 'selected' : ''?>>Monsieur</option>
                                    <option value="2" <?= ((!empty($civilityContent)) && ($civilityContent == 2)) ? 'selected' : ''?>>Madame</option>
                                    <option value="3" <?= ((!empty($civilityContent)) && ($civilityContent == 3)) ? 'selected' : ''?>>Autre</option>
                                </select>
                                    <!--Condition pour afficher ou non un message d'erreur-->
                                    <?= (isset($formError['civility'])) ? '<p class="error">' . $formError['civility'] . '</p>' : ''; ?>
                    <!--Champs nom de famille-->
                        <label for="lastName">Nom de famille: </label>
                            <!--Condition ternaire pour afficher une étoile en vert ou rouge selon la valeur de l'input-->
                            <?php echo ($lName == 1 ) ? '<span class="ok">*</span>' : '';echo (($lName == 0) || ($lName == 2)) ? '<span class="starError">*</span>' : ''; ?>
                            <!--Input Nom de famille-->
                            <input type="text" class="form-control" id="lastName" name="lastName" maxlength="15" value="<?php echo (isset($_POST['submit'])) ? $lastName : ''; ?>" placeholder="Votre nom" />
                                <!--Condition pour afficher ou non un message d'erreur-->
                                <?= (isset($formError['civility'])) ? '<p class="error">' . $formError['civility'] . '</p>' : ''; ?>
                    <!--Champs prénom-->
                        <label for="firstName">Prénom: </label>
                            <!--Condition  ternaire pour afficher une étoile en vert ou en rouge selon la valeur de l'input-->
                            <?php echo ($fName == 1 ) ? '<span class="ok">*</span>' : ''; echo (($fName == 0) || ($fName == 2)) ? '<span class="starError">*</span>' : ''; ?>
                            <!--Input Prénom-->
                            <input type="text" class="form-control" id="firstName" name="firstName" maxlength="15" value="<?php echo (isset($_POST['submit'])) ? $firstName : ''; ?>" placeholder="Votre prénom" />
                                <!--Condition pour afficher ou non un message d'erreur-->
                                <?= (isset($formError['firstName'])) ? '<p class="error">' . $formError['firstName'] . '</p>' : ''; ?>
                    <!--Champs age-->
                        <label for="age">Age: </label>
                        <!--Condition ternaire pour afficher une étoile verte ou rouge selon la valeur de l'input-->
                            <?php echo ($AGE == 1 ) ? '<span class="ok">*</span>' : ''; echo (($AGE == 0) || ($AGE == 2)) ? '<span class="starError">*</span>' : ''; ?>
                            <!--Input Age-->    
                            <input type="text" class="form-control" id="age" name="age" maxlength="2" value="<?php echo (isset($_POST['submit'])) ? $age : ''; ?>" placeholder="Votre age" />
                                <!--Condition pour afficher ou non un message d'erreur-->
                                <?= (isset($formError['age'])) ? '<p class="error">' . $formError['age'] . '</p>' : ''; ?>
                    <!--Champs société-->
                        <label for="society">Société: </label>
                            <!--Condition en ternaire pour afficher une étoile verte ou rouge selon la valeur de l'input-->
                            <?php echo ($sty == 1 ) ? '<span class="ok">*</span>' : '';echo (($sty == 0) || ($sty == 2)) ? '<span class="starError">*</span>' : ''; ?>
                            <!--Input Société-->
                            <input type="text" class="form-control" id="society" name="society" maxlength="20" value="<?php echo (isset($_POST['submit'])) ? $society : ''; ?>" placeholder="Votre société" />
                                <!--Condition pour afficher ou non un message d'erreur-->
                                <?= (isset($formError['society'])) ? '<p class="error">' . $formError['society'] . '</p>' : ''; ?>
                    <!--Boutton de validation-->
                        <input type="submit" class="form-control" id="submit" name="submit" value="J'affiche mes informations !" />
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php
                    //Condition lorsque l'on clique sur 'J'affiche mes informations !' à la fin du formulaire
                    if (isset($_POST['submit'])) {
                        ?>
                        <table>
                            <thead>
                                <tr><!--Titre des tableaux auquels on ajoutera les valeurs via le formulaire-->
                                    <th>Genre</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Age</th>
                                    <th>Société</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    //Ensemble de condition permettant d'afficher da manière plus graphique les données saisies par l'utilisateur
                                    //Vérification civilité
                                    if ($civil == 1) {
                                        ?>
                                    <!--On appelle la valeur rentrée dans l'input intégré dans le tableau $civilityAsso-->
                                        <td class='ok'><?= $civilityAsso[$civilityContent]; ?></td>
                                    <?php } else { ?>
                                        <td class="icone"><i class="far fa-angry"></i></td>
                                    <?php }
                                    //Vérification nom de famille
                                    if ($lName == 1) {
                                        ?>
                                        <td class='ok'><?= $lastName; ?></td>
                                    <?php } else { ?>
                                        <td class="icone"><i class="far fa-angry"></i></td>
                                    <?php }
                                    //Vérification prénom
                                    if ($fName == 1) {
                                        ?>
                                        <td class='ok'><?= $firstName; ?></td>
                                    <?php } else { ?>
                                        <td class="icone"><i class="far fa-angry"></i></td>
                                    <?php
                                    }
                                    //Vérification age
                                    if ($AGE == 1) {
                                        ?>
                                        <td class='ok'><?= $age; ?></td>
                                    <?php } else { ?>
                                        <td class="icone"><i class="far fa-angry"></i></td>
                                        <?php }
                                        //Vérification société
                                    if ($sty == 1) {
                                        ?>
                                        <td class='ok'><?= $society; ?></td>
                                    <?php } else { ?>
                                        <td class="icone"><i class="far fa-angry"></i></td>
                                        <?php } ?>
                                </tr>
                            </tbody>
                        </table>
                            <?php
                            //Condition pour afficher un cadre selon que la vérification finale est bonne ou mauvaise
                            //Si le formulaire est entièrement et correctement remplis, toutes les variables ont pour valeur 0
                            if (($civil == 1) && ($lName == 1) && ($fName == 1) && ($AGE == 1) && ($sty == 1)) { ?>
                            <div class="validated">
                                <h1>Bravo ! votre formulaire est correctement rempli !</h1>
                                <p>...Voila voila :)<br/>
                                    Ne cherche rien d'autre y a rien... vraiment...</p>
                            </div>
                            <?php }
                            //Condition pour Afficher le cadre d'aide si l'un des champs n'est pas rempli
                            if (($civil == 0) || ($lName == 0) || ($fName == 0) || ($AGE == 0) || ($sty == 0)) { ?>
                            <div class="negative">
                                <div class="red">
                                    <h1>Il y a une erreur dans votre formulaire !</h1>
                                    <p>Vous pouvez consulter le cadre d'aide ci-dessous pour voir ce que l'on attends de vous en cliquant sur une des rubriques</p>
                                </div>
                                <ul class="titleHelp">
                                    <li><h1 id="civilityTitleHelp">Civilité</h1></li>
                                    <li><h1 id="lastNameTitleHelp">Nom de famille</h1></li>
                                    <li><h1 id="firstTitleHelp">Prénom</h1></li>
                                    <li><h1 id="ageTitleHelp">Age</h1></li>
                                    <li><h1 id="societyTitleHelp">Société</h1></li>
                                </ul>
                                <ul class="help">
                                    <li id="civilHelp">
                                        <h2 class="underTitleHelp">Civilité</h2>
                                        <p>Vous devez choisir dans la liste déroulante entre Monsieur ou Madame<br />
                                        "Veuillez choisir votre sexe n'est pas une option valide !"</p>
                                    </li>
                                    <li  id="lastNameHelp">
                                        <h2 class="underTitleHelp">Nom de famille</h2>
                                        <p>Vous devez saisir un mot comprenant uniquement des lettres, sans caractère spéciaux (+*/'), sans chiffre (0-9) et sans espace<br />
                                            15 caractères maximum !</p>
                                    </li>
                                    <li  id="firstNameHelp">
                                        <h2 class="underTitleHelp">Prénom</h2>
                                        <p>Vous devez saisir un mot comprenant uniquement des lettres, sans caractère spéciaux (+*/'), sans chiffre (0-9) et sans espace<br />
                                            15 caractères maximum !</p>
                                    </li>
                                    <li id="ageHelp">
                                        <h2 class="underTitleHelp">Age</h2>
                                        <p>Vous devez saisir uniquement un chiffre ou un nombre, compris donc entre 1 ou 2 chiffre<br />
                                            2 caractères maximum. Les lettres sont interdites !</p>
                                    </li>
                                    <li id="SocietyHelp">
                                        <h2 class="underTitleHelp">Société</h2>
                                        <p>Vous devez saisir un mot comprenant uniquement des lettres, et sans caractère spéciaux (Ex: +*/')<br />
                                            20 caractères maximum !</p>
                                    </li>
                                </ul>
                            </div>
                            <?php } } ?>
                </div>
            </div>
            <?php include 'scriptJquery.php';?>
    </body>
</html>
