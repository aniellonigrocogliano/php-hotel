<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>

<body class="container">
    <section>
        <?php foreach ($hotels as $index => $cur_hotel){
            $name=$cur_hotel["name"];
            $description=$cur_hotel["description"];
            if($cur_hotel["parking"]){
                $parking="Presente";
            } else {
                $parking="Assente";
            }
            $vote=$cur_hotel["vote"];
            $distance=$cur_hotel["distance_to_center"];

         echo "<div class=\"card\">
            <h5 class=\"card-header\"> {$name} </h5>
            <div class=\"card-body\">
            <h5 class=\"card-title\">Info:</h5>
                <p class=\"card-text\">Descrizione: $description.</p>
                <p class=\"card-text\">Parcheggio: $parking.</p>
                <p class=\"card-text\">Valutazione: $vote su 5.</p>
                <p class=\"card-text\">Distanza dal centro: $distance KM.</p>
            </div>";
            }?>
    </section>
    </div>
</body>

</html>