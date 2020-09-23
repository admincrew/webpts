<?php
$kalender = tanggal_indo($date);
$expCall = explode(' ',$kalender);
$calDay = $expCall[0];

$class = 7;

$soalPts = linkPts($calDay, $class)
$labelPts = $soalPts['label'];
$linkPts = $soalPts['link'];
?>