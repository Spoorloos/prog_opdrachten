<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php for ($i = 0; $i <= 10000; $i++): ?>
        <a href="fahrenheit.php?celsius=<?= $i ?>"><?= $i ?> graden Celsius naar Fahrenheit omreken</a>
        <br>
    <?php endfor; ?>
</body>
</html>