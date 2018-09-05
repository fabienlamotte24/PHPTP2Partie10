<script>
                //Changement de couleur en bleu au survol
                $('#civilityTitleHelp').mouseover(function () {
                    $(this).css("color", "blue");
                });
                //Changement de couleur en noir lorsqu'on ne survol plus
                $('#civilityTitleHelp').mouseout(function () {
                    $(this).css("color", "black");
                });
                //Affichage ou masquage du contenu au click de l'id
                $('#civilityTitleHelp').click(function () {
                    $('#civilHelp').toggle();
                    $('#lastNameHelp').hide();
                    $('#firstNameHelp').hide();
                    $('#ageHelp').hide();
                    $('#SocietyHelp').hide();
                });
                //Changement de couleur en bleu au survol
                $('#lastNameTitleHelp').mouseover(function () {
                    $(this).css("color", "blue");
                });
                //Changement de couleur en noir lorsqu'on ne survol plus
                $('#lastNameTitleHelp').mouseout(function () {
                    $(this).css("color", "black");
                });
                //Affichage ou masquage du contenu au click de l'id
                $('#lastNameTitleHelp').click(function () {
                    $('#civilHelp').hide();
                    $('#lastNameHelp').toggle();
                    $('#firstNameHelp').hide();
                    $('#ageHelp').hide();
                    $('#SocietyHelp').hide();
                });
                //Changement de couleur en bleu au survol
                $('#firstTitleHelp').mouseover(function () {
                    $(this).css("color", "blue");
                });
                //Changement de couleur en noir lorsqu'on ne survol plus
                $('#firstTitleHelp').mouseout(function () {
                    $(this).css("color", "black");
                });
                //Affichage ou masquage du contenu au click de l'id
                $('#firstTitleHelp').click(function () {
                    $('#lastNameHelp').hide();
                    $('#civilHelp').hide();
                    $('#firstNameHelp').toggle();
                    $('#ageHelp').hide();
                    $('#SocietyHelp').hide();
                });
                //Changement de couleur en bleu au survol
                $('#ageTitleHelp').mouseover(function () {
                    $(this).css("color", "blue");
                });
                //Changement de couleur en noir lorsqu'on ne survol plus
                $('#ageTitleHelp').mouseout(function () {
                    $(this).css("color", "black");
                });
                //Affichage ou masquage du contenu au click de l'id
                $('#ageTitleHelp').click(function () {
                    $('#lastNameHelp').hide();
                    $('#civilHelp').hide();
                    $('#firstNameHelp').hide();
                    $('#ageHelp').toggle();
                    $('#SocietyHelp').hide();
                });
                //Changement de couleur en bleu au survol
                $('#societyTitleHelp').mouseover(function () {
                    $(this).css("color", "blue");
                });
                //Changement de couleur en noir lorsqu'on ne survol plus
                $('#societyTitleHelp').mouseout(function () {
                    $(this).css("color", "black");
                });
                //Affichage ou masquage du contenu au click de l'id
                $('#societyTitleHelp').click(function () {
                    $('#lastNameHelp').hide();
                    $('#civilHelp').hide();
                    $('#firstNameHelp').hide();
                    $('#ageHelp').hide();
                    $('#SocietyHelp').toggle();
                });
</script>