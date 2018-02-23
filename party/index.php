<?php

require("core/init.php");

?>

<h1>Paaaartty!</h1>

<h2>Anmälda gäster</h2>
<ol>
<?php
	$guestsController = new GuestsController($dbh);

	$guests = $guestsController->getGuests();
	foreach ($guests as $guest) {
		echo "<li><a href='guest.php?id={$guest->getId()}'>{$guest->getName()}</a></li>";
	}
?>
</ol>
