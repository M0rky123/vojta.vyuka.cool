<?php

// * * * * *  F U N K C E   U Ž I T E Č N É   P R O   V Š E C H N Y   N A Š E   S T R Á N K Y


//   R E N D E R   H T M L   P O D L E   D A T
//   =========================================

/**
 * Jednoduchá funkce na renderování HTML šablon
 * - Vezme HTML šablonu $file (která obsahuje parametry - PHP proměnné) a na místo těchto proměnných dosadí (podle klíčů) hodnoty z pole $args.
 * - Based on https://www.daggerhartlab.com/create-simple-php-templating-function/
 *
 * @param string $file  - Cesta k PHP souboru, který slouží jako HTML šablona.
 * @param array $args   - AsociatIvní pole s proměnnými pro HTML šablonu.
 * @return string       - Výstup - HTML KÓD (šablona $file s doplněním proměnných z pole $args)
 */
function renderujHtmlSablonu(string $file, array $args): string
{
  // ensure the file exists
  if (!file_exists($file)) {
    return '';
  }

  // Make values in the associative array easier to access by extracting them
  if (is_array($args)) {
    extract($args);
  }

  // buffer the output (including the file is "output")
  ob_start();
  include $file;
  return ob_get_clean();
}



//   M E N U
//   =======

/**
 * Vypíše HTML kód menu podle konfiguračního pole
 *
 * @param array $menuConfig Pole s klíči ['adresa', 'text']
 * 
 * @return string
 * 
 */
function vypisMenu(array $menuConfig): string
{
  if (!$menuConfig) return '';

  // zjištění jména souboru se skriptem
  $adresa = ltrim($_SERVER['SCRIPT_URL'], '/') ;
  $adresa = ($adresa) ? $adresa : '/' ;

  $rtrn = "";
  $rtrn .= "<nav>";
  $rtrn .= "<ul class='menu'>";

  foreach ($menuConfig as $menuItem) {
    if ( isset($menuItem['adresa']) && isset($menuItem['textMenu']) ) {
      $active = ($menuItem['adresa'] === $adresa) ? " class='active'" : "";
      $rtrn .= "<li$active><a href='" . $menuItem['adresa'] . "'>" . $menuItem['textMenu'] . "</a></li>";
    }
  }

  $rtrn .= "</ul>";
  $rtrn .= "</nav>";

  return $rtrn;
}