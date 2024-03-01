<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php // deze code is zo lelijk 😭
        $namen = [ 'Peter', 'Brian', 'Stewie', 'Quagmire', 'Herbert' ];
        echo count($namen) . '<br>';
        sort($namen);
        print_r($namen);
        echo '<br>' . array_pop($namen) . '<br>';
        array_push($namen, 'Joe');
        $namen[count($namen)] = 'Lois';
        print_r($namen);
        $namen_tekst = implode('<br>', $namen);
        echo '<br>' . $namen_tekst . '<br>';
        $namen_array = explode('<br>', $namen_tekst);
        print_r($namen_array);
    ?>
</body>
</html>