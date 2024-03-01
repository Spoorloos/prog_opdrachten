<?php
$pokemons = ['Bulbasaur', 'Charmander', 'Squirtle', 'Pikachu', 'Eevee'];
$images = [
    'https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png',
    'https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png',
    'https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png',
    'https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png',
    'https://assets.pokemon.com/assets/cms2/img/pokedex/full/133.png'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets">
    <title>Document</title>
</head>
<body>
    <?php for ($i = 0; $i < count($pokemons); $i++): ?>
        <h1><?= $pokemons[$i] ?></h1>
        <img src="<?= $images[$i] ?>" alt="<?= $pokemons[$i] ?>">
    <?php endfor; ?>  
</body>
</html>