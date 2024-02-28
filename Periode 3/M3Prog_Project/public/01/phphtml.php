<!doctype html>
<html lang="nl">
<head>
    <title><?php echo "Titel van de pagina" ?></title>
</head>
<body>
    <h2>De datum vandaag is: <?php echo date('d-m-Y')?>, en de tijd is <?php echo date("H:i")?> uur.
    <p>Tellen kan ook:</p>
    <ol> 
        <?php for ($i = 0; $i < 100; $i++): ?>
            <li><?php echo $i; ?></li>
        <?php endfor; ?>
    </ol>
</body>
</html>