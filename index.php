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

    $genre1 = new Genre("Science Fiction");
    $genre2 = new Genre("Espion");
    
    $role1 = new Rôle("Han Solo");
    $role2 = new Rôle("Luke Skywalker");
    $role3 = new Rôle("Rick Deckard");
    $role4 = new Rôle("James Bond");
    
    $actor1 = new Acteur("Harrison", "Ford", "Homme", "13-07-1942");
    $actor2 = new Acteur("Mark", "Hamill", "Homme", "25-09-1951");
    $actor3 = new Acteur("Sean", "Connery", "Homme", "25-08-1930");
    $actor4 = new Acteur("Daniel", "Craig", "Homme", "02-05-1968");
    
    $réalisateur1 = new Réalisateur("George", "Lucas", "Homme", "14-05-1944");
    $réalisateur2 = new Réalisateur("Ridley","Scott","Homme","30-11-1937");
    $réalisateur3 = new Réalisateur("Terence", "Young", "Homme", "20-06-1915");
    $réalisateur4 = new Réalisateur("Sam", "Mendes", "Homme", "01-08-1965");
   
    $film1 = new Film("Star Wars Episode IV","19.10.1977", 121 ,"La guerre civile fait rage entre l'Empire galactique et l'Alliance rebelle. <br/> Capturée par les troupes de choc de l'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l'Etoile Noire.", $réalisateur1, $genre1);
    $film2 = new Film("Blade Runner", "15.09.1982", 117 , "En l'an 2019, un ex-policier devenu détective privé, Rick Deckard, est rappelé en service pour faire la chasse à des robots d'apparence humaine appelés 'replicants.' <br/> Deckard doit en éliminer quatre qui se cachent à Los Angeles. La tâche n'est pas facile, mais il arrive à supprimer trois des robots, sans pouvoir empêcher le meurtre d'un important industriel. <br/> Le quatrième 'replicant,' Batty, s'avère particulièrement coriace.", $réalisateur2, $genre1);
    $film3 = new Film("James Bond 007 contre Dr No", "27.01.1963", 105, "", $réalisateur3, $genre2);
    $film4 = new Film("Skyfall", "26.10.2012", 143, "Laissé pour mort après une mission en Turquie qui a tourné au désastre, l'agent britannique James Bond, nom de code 007, réapparaît à Londres lorsqu'il apprend par les informations d'un journal télévisé qu'un attentat a été commis contre le M16. Cet événement ébranle considérablement l'autorité de la directrice M.", $réalisateur4, $genre2);

    $casting1 = new Casting($film1, $role1, $actor1);
    $casting2 = new Casting($film1, $role2, $actor2);
    $casting3 = new Casting($film2, $role3, $actor1);
    $casting4 = new Casting($film3, $role4, $actor3);
    $casting5 = new Casting($film4, $role4, $actor4);
    

    echo $film1->displayMovieList();
    echo $film2->displayMovieList();

    echo $role1->displayActorRole();
    echo $role4->displayActorRole();

    echo $film1->displayMovieCasting();

    echo $réalisateur1->displayFilmography();
    echo $réalisateur2->displayFilmography();
    
    echo $actor1->displayFilmography();

    echo $genre1;
    echo $genre1->displayGenreList();

    ?>
    
</body>
</html>