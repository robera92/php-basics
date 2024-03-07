<?php

    require('vendor/autoload.php');

    use OOP\User;
    use OOP\Student;
    use OOP\Utilities;

    $userOne = new Student('Tadas','tadas@gmail.com','admin');

    $userOne->addNote('Testas note');

    $userOne->addGroup('php/1it');

    $userOne->addSubject('math');
    $userOne->addSubject('it');
    

    Utilities::UserInfoBlock($userOne->showUserInfo());