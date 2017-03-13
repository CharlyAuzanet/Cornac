<?php

include 'header.php';

include 'tableau.php';

foreach ($tableau as $key) {
	echo  "<p style=\"text-align: center\">A " . $key['heure'] . " venez voir " . $key['artiste'] . " dans son spectable \"" . $key['titre'] . "\" !!!" . $key['image'] . '</p>';

}

include 'footer.php';
