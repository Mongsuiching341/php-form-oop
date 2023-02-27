<?php

class Person
{
    private $name, $email;

    function __construct($name = '', $email = '')
    {
        $this->name = $name;
        $this->email = $email;
    }
    function getName()
    {
        return $this->name;
    }
    function getEmail()
    {
        return $this->email;
    }
    function setName($name)
    {
        $this->name = $name;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }
}

//php script
