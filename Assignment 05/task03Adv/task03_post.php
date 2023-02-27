<?php

$name = $_POST['name'];
$email = $_POST['email'];

class Person
{
    private $name;
    private $email;

    function setName($name)
    {
        $this->name = $name;
    }
    function setEmail($email)
    {
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
}

$personInfo = new Person();
$personInfo -> setName($name);
$personInfo -> setEmail($email);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 5</title>
</head>
<body>
    <center>
        <h1>User Info</h1>
        <h1 style="background-color:brown; padding:20px 25px; color:white; margin:30px">
            <?php
            echo "Name: " . $personInfo->getName() . "<br>";
            echo "Email: " . $personInfo->getEmail();
            ?>
        </h1>
    </center>
</body>
</html>