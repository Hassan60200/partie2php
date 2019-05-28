<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="script.css">
    <title>Ex1 php</title>
</head>
<body>
    <div class="container text-center">

        <h1 class="jumbotron">Créer deux variables age et gender. La variable gender peut prendre comme valeur :</h1>
        <div class="text-primary">

         <ul>
            <li>
                Homme</li>
                <li>Femme
                </li>
            </ul>
            <p>En fonction de l'âge et du genre afficher la phrase correspondante :</p>
            <ul>
                <li>Vous êtes un homme et vous êtes majeur</li>
                <li>Vous êtes un homme et vous êtes mineur</li>
                <li>Vous êtes une femme et vous êtes majeur</li>
                <li>Vous êtes une femme et vous êtes mineur</li>
            </ul>
</div>
            <?php
            $age=22;
            $gender=homme;
            if ($age >= 18 AND $gender == homme) {
                echo ("Vous êtes un homme et vous êtes majeur");
            }
            else {
                echo "Vous êtes un homme et vous êtes mineur";
            }
            ?>



        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    </body>
    </html>
