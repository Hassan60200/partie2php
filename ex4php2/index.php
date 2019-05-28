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

        <h1 class="jumbotron">L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
            Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.</h1>


            <?php
            $magnitude= 5;

            if ($magnitude == 1)
            {
                echo "Micro-séisme impossible à ressentir.";
            }

            elseif ($magnitude == 2)
            {
                echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
            }

            elseif ($magnitude == 3)
            {
                echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
            }

            elseif ($magnitude == 4)
            {
                echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
            }

            elseif ($magnitude == 5)
            {
                echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
            }

            elseif ($magnitude == 6)
            {
                echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
            }

            elseif ($magnitude == 7)
            {
                echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
            }

            elseif ($magnitude ==8) {
                echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";}
                elseif ($magnitude ==9) {
                    echo "Séisme capable de tout détruire sur une très vaste zone.";
                }
                ?>

            </div>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        </body>
        </html>
