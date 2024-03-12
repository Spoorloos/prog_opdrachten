<?php
    $titel = 'Mijn Document';
    $img_url = 'https://i.seadn.io/gae/2hDpuTi-0AMKvoZJGd-yKWvK4tKdQr_kLIpB_qSeMau2TNGCNidAosMEvrEXFO9G6tmlFlPQplpwiqirgrIPWnCKMvElaYgI-HiVvXc?auto=format&dpr=1&w=1000';
    $img_titel = 'Shrek';
    $autheur = 'Mick';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $titel ?></h1>
    <img src="<?= $img_url ?>" alt="<?= $img_titel ?>">
    <section>
        <h2>Autheur: <?= $autheur ?></h2>
    </section>
</body>
</html>