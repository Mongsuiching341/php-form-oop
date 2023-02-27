<?php

//task 3
function setNameEmail($userTwo)
{

    if ($_POST['name'] !== '' && $_POST['email'] !== '') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

        $userTwo->setName($name);
        $userTwo->setEmail($email);
    }
}
