<?php

/**REQUIRE*/
require_once('Personne.php');
require_once('Auteur.php');
require_once('Film.php');
require_once('Genre.php');
require_once('Casting.php');
require_once('Acteur.php');


/**AUTEURS */
$miyazaki= new Auteur("Miyazaki","Hayao","Homme","05/01/1941");
$jackson= new Auteur("Jackson", "Peter","Homme","31/08/1961");
$coogler= new Auteur("Coogler", "Ryan","Homme","23/05/1986");

/**GENRE*/
$fantasy= new Genre("Fantasy");
$aventure= new Genre("Aventure");

/**FILMS
$mononoke= new Film();
$chateauambulant= new Film();
$hobbit1= new Film();
$kingkong= new Film(); */

$blackpanther= new Film("Black Panther", $coogler, $castingblackpanther, "16/02/2018", $aventure, "2h15","C'est un film de Super Héro");

/**ACTEURS*/
$mfreeman= new Acteur("Freeman","Martin","Homme","08/09/1971", "Black Panther");






/**ROLE*/
$everettRoss= new Role($blackpanther, "Everett K. Ross");

/**CASTING */
$castingblackpanther= new Casting($blackpanther, $mfreeman, "test");
/**AFFICHAGE*/
/**$miyazaki->showFilmography();
$fantasy->showGenrelist();
$aventure->showGenrelist();
$jackson->showFilmography();
$mfreeman->showActorfilms();*/

?>