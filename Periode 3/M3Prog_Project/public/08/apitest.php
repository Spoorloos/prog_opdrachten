<?php
    $result = file_get_contents('https://uselessfacts.jsph.pl/api/v2/facts/random');
    $parsed = json_decode($result, true);

    $random_fact = $parsed['text'];
    $source = $parsed['source_url'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Random Facts</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            background-color: #222;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
            font-family: system-ui, sans-serif;
        }

        #fact {
            background-color: #666;
            padding: 3rem;
            box-shadow: 0 0 100px black;
            border: thin solid #999;
            border-radius: 3rem;
        }
    </style>
</head>
<body>
    <h1>Random Fact:</h1>
    <div id="fact">
        <p><b><?= $random_fact ?></b></p>
        <small>Source: <em><?= $source ?></em></small>
    </div>
</body>
</html>