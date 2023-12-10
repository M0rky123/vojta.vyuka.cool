<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $titulek ?> | Dobroš Nechvalný, osobní stránky</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <header>
    <img src="./img/dobros-nechvalny.jpg" alt="Dobroš">
    <h1><?= $nadpis ?></h1>

    <nav>
      <?= vypisMenu(include __DIR__ . "/../data/adresy-a-stranky.php") ?>
    </nav>
  </header>

  <main>