<?php
$organizer = "Petr";
$place = "Praha";
$capacity = 33;

$people = [
    "Jirka",
    "Ondra",
];
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Party Hard</title>
</head>
<body>
    <h1>Party Hard</h1>

    <ul>
        <li>Pořadatel: <?=$organizer?></li>
        <li>Čas: 29.2. 2020</li>
        <li>Místo: <?=$place?></li>
        <li>Počet Míst: <?=$capacity?></li>
        <li>Zbývá Míst: <?php
            $availableCapacity = $capacity - count($people);
            if ($availableCapacity <= 0) {
                echo "Obsazeno";
            } else {
                echo $availableCapacity;
            }
        ?></li>
    </ul>

    <h2>Příjdou</h2>
    <ol>
    <?php
        foreach ($people as $person) {
            ?><li><?=$person?></li><?php
        }
        ?>
    </ol>
</body>
</html>