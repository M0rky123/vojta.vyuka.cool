<?php 
  // Inicializace PHP
  include __DIR__ . "/../elementy-html-php/php-inicializace.php" ; 

  // Zjištění adresy z adresního řádku
<<<<<<< HEAD
  $stranka = explode("/", $_SERVER['REQUEST_URI']) ;
  $stranka = end($stranka) ;
  $stranka = explode("?", $stranka)[0] ;
  $stranka = ($stranka) ? $stranka : "index" ;
=======
  $stranka = (ltrim($_SERVER['SCRIPT_URL'], '/')) ? ltrim($_SERVER['SCRIPT_URL'], '/') : "index" ;
>>>>>>> bf00644e6d34daae6048a5f9f36adea0b4bd48a0
  
  // Načtení seznamu "známých" stránek
  $stranky = include __DIR__ . "/../data/adresy-a-stranky.php" ;

  // Když požadovanou stránku neznáme, zobrazíme "Chyba 404: Stránka nenalezena."
  $strankaKZobrazeni = (isset($stranky[$stranka])) ? $stranka : "404" ;

  // Vypíšeme hlavičku
  echo renderujHtmlSablonu(__DIR__ . "/../elementy-html-php/html-hlavicka.php", $stranky[$strankaKZobrazeni]) ; 

  // Provedeme "PHP výpočty" k zobrazované stránce
  if (file_exists(__DIR__ . "/../php/_$strankaKZobrazeni.php")) include __DIR__ . "/../php/_$strankaKZobrazeni.php" ;

  // Vypíšeme obsah "HTML souboru" k zobrazované stránce
  include __DIR__ . "/../stranky/$strankaKZobrazeni.php" ;

  // Vypíšeme patičku
  include __DIR__ . "/../elementy-html-php/html-paticka.php" ; 