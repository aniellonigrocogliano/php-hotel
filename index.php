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
        <form action="index.php" method="GET" class="d-flex p-3">
            <div>
                <select class="form-select m-3" aria-label="Valutazione" name="vote">
                    <option selected value="nd">Filtra per valutazione</option>
                    <option value="1">1 o maggiore</option>
                    <option value="2">2 o maggiore</option>
                    <option value="3">3 o maggiore</option>
                    <option value="4">4 o maggiore</option>
                    <option value="5">Solo 5</option>
                </select>
            </div>
            <div>
                <select class="form-select m-3" aria-label="Parcheggio" name="parking">
                    <option value="nd">Filtra per parcheggio</option>
                    <option value="true">Parcheggio presente</option>
                    <option value="false">Parcheggio assente</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary m-3">Filtra</button>
        </form>
    </section>
    <section>
        <?php

        $newarray = [];
        if (empty($_GET)) {
            if (empty($_GET["vote"])) {
                $voteget = "nd";
            }
            if (empty($_GET["parking"])) {
                $parkingget = "nd";
            }
        } else {
            $parkingget = $_GET["parking"];
            $voteget = $_GET["vote"];
            if ($parkingget == "true") {
                $parkingget = "on";
            } elseif($parkingget == "false") {
                $parkingget = "off";
            }
        }
        foreach ($hotels as $index => $cur_hotel) {
            if ($cur_hotel["parking"]) {
                $parkitf = "on";
            } else {
                $parkitf = "off";
            }

            if ($voteget != "nd" and  $parkingget != "nd") {
                if ($cur_hotel["vote"] >= $voteget && $parkitf == $parkingget)
                    $newarray[] = $cur_hotel;
            } elseif ($voteget != "nd") {
                if ($cur_hotel["vote"] >= $voteget) {
                    $newarray[] = $cur_hotel;
                }
            } elseif ($parkingget != "nd") {
                if ($parkitf == $parkingget) {
                    $newarray[] = $cur_hotel;
                }
            } elseif ($voteget == "nd" &&  $parkingget == "nd") {
                $newarray[] = $cur_hotel;
            }
        }
        foreach ($newarray as $index => $cur_hotel) {
            $name = $cur_hotel["name"];
            $description = $cur_hotel["description"];
            if ($cur_hotel["parking"]) {
                $parking = "Presente";
            } else {
                $parking = "Assente";
            }
            $vote = $cur_hotel["vote"];
            $distance = $cur_hotel["distance_to_center"];

            echo "<div class=\"card\">
            <h5 class=\"card-header\"> {$name} </h5>
            <div class=\"card-body\">
            <h5 class=\"card-title\">Info:</h5>
                <p class=\"card-text\">Descrizione: $description.</p>
                <p class=\"card-text\">Parcheggio: $parking.</p>
                <p class=\"card-text\">Valutazione: $vote su 5.</p>
                <p class=\"card-text\">Distanza dal centro: $distance KM.</p>
            </div>";
        }
        $parkitf = "";
        ?>
    </section>
    </div>
</body>

</html>