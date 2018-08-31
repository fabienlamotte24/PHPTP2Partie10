<?php
//Déclaration d'un tableau afin de boucler les valeur du select 'civilité'
    $civility = array ('Veuillez choisir votre sexe','Monsieur', 'Madame');
//Déclaration des valeur de validation, dont 0 est valide est 1 n'est pas valide
    $civil = 2;
    $lName = 2;
    $fName = 2;
    $sty = 2;
    $AGE = 2;
//Déclaration de variable d'erreur si jamais les champs enregistrés ne sont pas valide
    $civilityError = 'Vous n\'avez pas sélectionné votre civilité';
    $lastNameError = 'La saisie de votre nom est vide ou incorrecte';
    $firstNameError = 'La saisie de votre prénom est vide ou incorrecte';
    $ageError = 'La saisie de votre age est vide ou incorrecte';
    $societyError = 'La saisie de votre société est vide ou incorrecte';
//Déclaration de variable regex qui serviront de condition de validation
    $regName = '/^[a-zA-Zéàèêîôç\- ]+$/';
    $regAge = '/^[\d]{1,2}$/';
    $regcivility = '/^((Monsieur)|(Madame)){1}$/';
    $regSociety = '/^[a-zA-Z0-9éàèêîôç\- ]+$/';
//Déclaration de variable enregistrant les données transmises
    if(isset($_POST['submit'])){
        $civilityContent = $_POST['civility'];
        $lastName = $_POST['lastName'];
        $firstName = $_POST['firstName'];
        $age = $_POST['age'];
        $society = $_POST['society'];
        if(!empty($civilityContent) && preg_match($regcivility, $civilityContent)){
            $civil = 1;
        } else {
            $civil = 0;
        }
        if(!empty($lastName) && preg_match($regName, $lastName)){
            $lName = 1;
        } else {
            $lName = 0;
        }
        if(!empty($firstName) && preg_match($regName, $firstName)){
            $fName = 1;
        } else {
            $fName = 0;
        }
        if(!empty($age) && preg_match($regAge, $age)){
            $AGE = 1;
        } else {
            $AGE = 0;
        }
        if(!empty($society) && preg_match($regSociety, $society)){
            $sty = 1;
        } else {
            $sty = 0;
        }
    } ?>
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
                <form id="register" method="POST" action="#">
                    <ul>
                        <li>
                            <label for="civility">Civilité: </label><!--Champs civilité-->
                            <select name="civility" id="civility">
                        <?php foreach ($civility as $civilityNumber => $civilityName) { ?>
                            <option name="<?= $civilityName ?>" id="<?= $civilityName ?>" <?php echo ($civilityNumber == 0) ? 'selected disabled' : ''; echo (($civil == 1) && ($civilityContent == $civilityName)) ? 'selected' : '';?>><?= $civilityName; ?></option>
                        <?php } ?>
                    </select><?php echo ($civil == 1 ) ? '<span class="ok">*</span>' : ''; echo (($civil == 0) || ($civil == 2)) ? '<span class="error">*</span>' : ''; ?>
                            <?php echo ($civil == 0) ? '<p class="error">' . $civilityError . '</p>' : ''; ?>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <label for="lastName">Nom de famille: </label><!--Champs nom de famille-->
                            <input type="text" id="lastName" name="lastName" maxlength="15" value="<?php echo (isset($_POST['submit'])) ? $lastName : ''; ?>" placeholder="Votre nom" /><?php echo ($lName == 1 ) ? '<span class="ok">*</span>' : ''; echo (($lName == 0) || ($lName == 2)) ? '<span class="error">*</span>' : '' ; ?>
                              <?php echo ($lName == 0) ? '<p class="error">' . $lastNameError . '</p>' : ''; ?>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <label for="firstName">Prénom: </label><!--Champs prénom-->
                              <input type="text" id="firstName" name="firstName" maxlength="15" value="<?php echo (isset($_POST['submit'])) ? $firstName : ''; ?>" placeholder="Votre prénom" /><?php echo ($fName == 1 ) ? '<span class="ok">*</span>' : ''; echo (($fName == 0) || ($fName == 2)) ? '<span class="error">*</span>' : '' ; ?>
                              <?php echo ($fName == 0)? '<p class="error">' . $firstNameError . '</p>' : ''; ?>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <label for="age">Age: </label><!--Champs age-->
                              <input type="text" id="age" name="age" maxlength="2" value="<?php echo (isset($_POST['submit'])) ? $age : ''; ?>" placeholder="Votre age" /><?php echo ($AGE == 1 ) ? '<span class="ok">*</span>' : ''; echo (($AGE == 0) || ($AGE == 2)) ? '<span class="error">*</span>' : ''; ?>
                              <?php echo ($AGE == 0) ? '<p class="error">' . $ageError . '</p>' : '' ?>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <label for="society">Société: </label><!--Champs société-->
                              <input type="text" id="society" name="society" maxlength="20" value="<?php echo (isset($_POST['submit'])) ? $society : ''; ?>" placeholder="Votre société" /><?php echo ($sty == 1 ) ? '<span class="ok">*</span>' : '' ; echo (($sty == 0)||($sty == 2)) ? '<span class="error">*</span>' : ''; ?>
                              <?php echo ($sty == 0) ? '<p class="error">' . $societyError . '</p>' : ''; ?>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <input type="submit" id="submit" name="submit" value="J'affiche mes informations !" />
                        </li>
                    </ul>
                </form>
                </div>
            </div>
          <div class="row">
              <div class="col-12">
                  <?php
      //Condition lorsque l'on clique sur 'J'affiche mes informations !' à la fin du formulaire
        if(isset($_POST['submit'])){
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
                    if($civil == 1){ ?>
                    <td class='ok'><?= $civilityContent; ?></td>
                    <?php } else { ?>
                    <td class="error"><i class="far fa-angry"></i></td>
                    <?php }
                    //Vérification nom de famille
                    if($lName == 1){ ?>
                    <td class='ok'><?= $lastName; ?></td>
                    <?php } else { ?>
                    <td class="error"><i class="far fa-angry"></i></td>
                    <?php }
                    //Vérification prénom
                    if($fName == 1){ ?>
                    <td class='ok'><?= $firstName; ?></td>
                    <?php } else { ?>
                    <td class="error"><i class="far fa-angry"></i></td>
                    <?php }
                    //Vérification age
                    if($AGE == 1){ ?>
                    <td class='ok'><?= $age; ?></td>
                    <?php } else { ?>
                    <td class="error"><i class="far fa-angry"></i></td>
                    <?php }
                    //Vérification société
                    if( $sty == 1){ ?>
                    <td class='ok'><?= $society; ?></td>
                    <?php } else { ?>
                    <td class="error"><i class="far fa-angry"></i></td>
                    <?php } ?>
                      </tr>
                  </tbody>
              </table>
              <?php 
        //Condition pour afficher un cadre selon que la vérification finale est bonne ou mauvaise
        //Si le formulaire est entièrement et correctement remplis, toutes les variables ont pour valeur 0
                    if(($civil == 1) && ($lName == 1) && ($fName == 1) && ($AGE == 1) && ($sty == 1)){
                        echo $civil;?>
                  <div class="validated">
                      <h1>Bravo ! votre formulaire est correctement rempli !</h1>
                      <p>...Nous sommes navré, mais nous n'avions rien prévu d'autres... bonne journée ;) !</p>
                  </div> 
                    <?php }
                    if(($civil == 0) || ($lName == 0) || ($fName == 0) || ($AGE == 0) || ($sty == 0)){?>
        <!--Dans le cas contraire, les variables vaudront 1 et l'autre champs s'affichera à la place-->
            <!--Titre du cadre négative avec phrase d'intro-->
                  <div class="negative">
                      <h1 class="negTitle">Vous avez fait une erreur dans la saisie de votre formulaire !</h1>
                      <p class="pTitle">Vous pouvez consulter le cadre d'aide ci-dessous pour remplir correctement votre formulaire en cliquant sur l'un des élements.</p>
                <!--Listing des titres à cliquer pour accéder à leur contenus-->
                          <ul class="titleHelp">
                              <li>
                                  <h1 class="title" id="civilityTitleHelp">Civilité</h1>
                              </li>
                              <li>
                                  <h1 class="title" id="lastNameTitleHelp">Nom de famille</h1>
                              </li>
                              <li>
                                  <h1 class="title" id="firstTitleHelp">Prénom</h1>
                              </li>
                              <li>
                                  <h1 class="title" id="ageTitleHelp">Age</h1>
                              </li>
                              <li>
                                  <h1 class="title" id="societyTitleHelp">Société</h1>
                              </li>
                          </ul>
                <!--Listing du contenu à afficher lorsque l'on clique sur les titres au-dessus-->
                      <ul class="help">
                          <li id="civilHelp">
                              <h2>Civilité</h2>
                              <p>Vous devez choisir dans la liste déroulante entre Monsieur et Madame</p>
                          </li>
                          <li  id="lastNameHelp">
                              <h2>Nom de famille</h2>
                              <p>Vous devez saisir un mot comprenant uniquement des lettres, sans caractère spéciaux (+*/'), sans chiffre (0-9) et sans espace<br />
                              15 caractères maximum !</p>
                          </li>
                          <li  id="firstNameHelp">
                              <h2>Prénom</h2>
                              <p>Vous devez saisir un mot comprenant uniquement des lettres, sans caractère spéciaux (+*/'), sans chiffre (0-9) et sans espace<br />
                              15 caractères maximum !</p>
                          </li>
                          <li id="ageHelp">
                              <h2>Age</h2>
                              <p>Vous devez saisir uniquement un chiffre ou un nombre, compris donc entre 1 ou 2 chiffre<br />
                              2 caractères maximum. Les lettres sont interdites !</p>
                          </li>
                          <li id="SocietyHelp">
                              <h2>Société</h2>
                              <p>Vous devez saisir un mot comprenant uniquement des lettres, et sans caractère spéciaux (+*/')<br />
                              20 caractères maximum !</p>
                          </li>
                      </ul>
                  </div>
                <?php } 
        } ?>
              </div>
          </div>
        </div>
      <script>
      //Changement de couleur en bleu au survol
      $('#civilityTitleHelp').mouseover(function(){
          $(this).css("color","blue");
      });
      //Changement de couleur en noir lorsqu'on ne survol plus
      $('#civilityTitleHelp').mouseout(function(){
          $(this).css("color","black");
      });
      //Affichage ou masquage du contenu au click de l'id
      $('#civilityTitleHelp').click(function(){
          $('#civilHelp').toggle();
      });
      //Changement de couleur en bleu au survol
      $('#lastNameTitleHelp').mouseover(function(){
          $(this).css("color","blue");
      });
      //Changement de couleur en noir lorsqu'on ne survol plus
      $('#lastNameTitleHelp').mouseout(function(){
          $(this).css("color","black");
      });
      //Affichage ou masquage du contenu au click de l'id
      $('#lastNameTitleHelp').click(function(){
          $('#lastNameHelp').toggle();
      });
      //Changement de couleur en bleu au survol
      $('#firstTitleHelp').mouseover(function(){
          $(this).css("color","blue");
      });
      //Changement de couleur en noir lorsqu'on ne survol plus
      $('#firstTitleHelp').mouseout(function(){
          $(this).css("color","black");
      });
      //Affichage ou masquage du contenu au click de l'id
      $('#firstTitleHelp').click(function(){
          $('#firstNameHelp').toggle();
      });
      //Changement de couleur en bleu au survol
      $('#ageTitleHelp').mouseover(function(){
          $(this).css("color","blue");
      });
      //Changement de couleur en noir lorsqu'on ne survol plus
      $('#ageTitleHelp').mouseout(function(){
          $(this).css("color","black");
      });
      //Affichage ou masquage du contenu au click de l'id
      $('#ageTitleHelp').click(function(){
          $('#ageHelp').toggle();
      });
      //Changement de couleur en bleu au survol
      $('#societyTitleHelp').mouseover(function(){
          $(this).css("color","blue");
      });
      //Changement de couleur en noir lorsqu'on ne survol plus
      $('#societyTitleHelp').mouseout(function(){
          $(this).css("color","black");
      });
      //Affichage ou masquage du contenu au click de l'id
      $('#societyTitleHelp').click(function(){
          $('#SocietyHelp').toggle();
      });
      </script>
  </body>
</html>
