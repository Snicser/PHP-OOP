<?php

    define('ROOT_PATH', dirname(__FILE__) . '/');

    require_once('user/User.php');
    require_once('products/toys/TeddyBear.php');

    $flavio = new User("Flavio", "Schoute", 17, "flavio_fake@gmail.com");
    $bode = new User("Jeroen", "Bode", 35, "bode_fake@gmail.com");

    $flavio -> addToDatabase();
    $bode -> addToDatabase();

    echo $flavio -> getAge();
    $flavio -> setAge(19);
    echo $flavio -> getAge();

    $bode -> setAge(110);
    $bode -> deleteUserFromDatabase();

    $myBear = new TeddyBear(2, 70);

    echo $myBear -> getEyes();
    echo $myBear -> getHugValue();
    echo $myBear -> getName();
    echo $myBear -> getDescription();
    echo $myBear -> getPrice();


    $myBear->talk();
    $myBear->eat();
    $myBear->info();

    $myBear->setPrice(50);
    echo $myBear->getPrice();


    $myBear->setPrice(-20);
    echo $myBear->getPrice();










