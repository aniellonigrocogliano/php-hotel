<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>

<body>
    <form action="action.php" method="GET" class="container p-3">
        <div class="mb-3">
            <label class="form-label">Inserisci testo</label>
            <textarea class="form-control" id="testo" rows="3" name="text"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Inserisci parola da censurare</label>
            <input type="text" class="form-control" id="word-da-censurare" name="word" >
        </div>
        <button type="submit" class="btn btn-primary">Censura</button>
    </form>
</body>

</html>