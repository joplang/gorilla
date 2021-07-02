<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main/styles.css">

    </style>
</head>
<body>
<header> 
        <h1>
            Hier woont een gorilla
        </h1>

</header>
    <section>
    <ul>
    <?php foreach ($names as $name) : ?>
        <li> <?= $name; ?> </li>
        <?php endforeach; ?>
    </ul>

    <ul>
    <?php foreach ($animals as $animal) : ?>
    <li> <?= $animal; ?> </li>
    <?php endforeach; ?>

    </ul>

    <ul>
    <?php foreach ($persoon as $feature => $val) : ?>
    <li> <?= $feature; ?> <?= $val; ?> </li>
    <?php endforeach; ?>
    </ul>


</p>

     </section>



</body>
</html>