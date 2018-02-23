<?php

require("core/init.php");

$guest = new Guest();
$guest->setFirstName($_POST['firstname']);
$guest->setLastName($_POST['lastname']);
$guest->setEmail($_POST['email']);

$guestsController = new GuestsController($dbh);
$guestsController->addGuest($guest);
?>

<h1>Yeeey, du är nu anmäld till festen!</h1>

<a href="index.php">Yippiiiie</a>
