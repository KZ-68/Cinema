<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body>
<h1>Exercice 3 - POO</h1>
    
    <h2>Résultat</h2>

    <?php

    spl_autoload_register(function ($class_name) {
        require 'classes/'. $class_name . '.php';
    });

    $casting1 = new Casting();
    $casting2 = new Casting();
    $casting3 = new Casting();
    $genre1 = new Genre("Science Fiction");
    $role1 = new Rôle("Han Solo", $casting1);
    $role2 = new Rôle("Luke Skywalker", $casting1);
    $role3 = new Rôle("James Bond", $casting3);
    $actor1 = new Acteur("Harrison", "Ford", "Homme", "13-07-1942", $casting1);
    $actor2 = new Acteur("Mark", "Hamill", "Homme", "25-09-1951", $casting1);
    $actor3 = new Acteur("Sean", "Connery", "Homme", "25-08-1930", $casting3);
    $réalisateur1 = new Réalisateur("George", "Lucas", "Homme", "14-05-1944");
    $réalisateur2 = new Réalisateur("Ridley","Scott","Homme","30-11-1937");
    $film1 = new Film("Star Wars Episode IV","19.10.1977", 121 ,"La guerre civile fait rage entre l'Empire galactique et l'Alliance rebelle. <br/> Capturée par les troupes de choc de l'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l'Etoile Noire.", $réalisateur1, $genre1, $casting1);
    $film2 = new Film("Blade Runner", "15.09.1982", 117 , "", $réalisateur2, $genre1, $casting2);
    echo $réalisateur1;
    echo $réalisateur1->afficherFilmographie();
    echo $casting1->afficherFilms($film1, $role1, $actor1, $role2, $actor2);
    echo $genre1;
    echo $genre1->afficherListeFilms();
    echo $role3;
    echo $casting3->afficherActeurRole($actor3);
    
    ?>
    
</body>
</html>