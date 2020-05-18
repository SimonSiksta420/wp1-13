<?php
$firstnumber = filter_input(INPUT_POST, 'firstnumber');
$secondnumber = filter_input(INPUT_POST, 'secondnumber');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Výsledky </h1>

<ul>
 <li> <?= $firstnumber ?> + <?= $secondnumber ?> = <?= $firstnumber + $secondnumber ?> </li>
 <li> <?= $firstnumber ?> + <?= $secondnumber ?> = <?= $firstnumber - $secondnumber ?> </li>
 <li> <?= $firstnumber ?> + <?= $secondnumber ?> = <?= $firstnumber * $secondnumber ?> </li>
 <li> <?= $firstnumber ?> + <?= $secondnumber ?> = <?= $firstnumber / $secondnumber ?> </li>
</ul>    
</body>
</html>