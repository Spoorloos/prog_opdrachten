<?php
    function get_response_code($url) {
        return substr(get_headers($url)[0], 9, 3);
    }

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $api_url = "https://pokeapi.co/api/v2/pokemon/$name";

        if (get_response_code($api_url) === '200') {
            $result = file_get_contents($api_url);
            $json = json_decode($result, true);
            $weight = intval($json['weight']) / 10;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pokemon Weight Index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html {
            font-family: system-ui, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Pokemon Weight Index</h1>
    <form action="forminput.php" method="post">
        <label for="name">Pokemon name:</label>
        <input id="name" name="name" type="text" placeholder="Enter a pokemon's name">
        <input type="submit">
    </form>
    <br>
    <b><?=
        isset($weight)
            ? "$name's weight is: $weight kg"
            : 'Pokemon not found :(';
    ?></b>
</body>
</html>