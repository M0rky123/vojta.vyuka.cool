<?php

// * * * * *  L A D Ě N Í   . . . 



/**
 * Vypíše ladící výpis - obsah proměnné
 *
 * @param string $popisek Abychom věděli, jakou proměnnou vypisujeme
 * @param mixed $promenna Vypisovaná proměnná (vč. polí)
 * 
 * @return string HTML kód výpisu
 * 
 */
function vypisPromennou(string $popisek, mixed $promenna): string{
  $massageData['titulek'] = "&#128270;  $popisek" ;
  $massageData['text'] = "<pre>" . htmlspecialchars(var_export($promenna, TRUE), ENT_QUOTES) . "</pre>" ;
  
  $massageData['titleColor'] = "DarkBlue" ;
  $massageData['titleBackground'] = "LightSkyBlue" ;

  $massageData['textColor'] = "#333333" ;
  $massageData['textBackground'] = "AliceBlue" ;

  return renderujHtmlSablonu(__DIR__ . '/../elementy-html-php/ladici-vypis.php', $massageData) ;
}



/**
 * Vypíše chybu zachycenou v try... catch
 *
 * @param string $titulek Nadpisek chyby
 * @param string $text Text Chyby
 * 
 * @return string HTML kód výpisu chyby
 * 
 */
function vypisChybu(string $titulek, string $text): string
{
  $massageData['titulek'] = "&#128533;  $titulek" ;
  $massageData['text'] = $text ;
  
  $massageData['titleColor'] = "Moccasin" ;
  $massageData['titleBackground'] = "Crimson" ;

  $massageData['textColor'] = "Maroon" ;
  $massageData['textBackground'] = "LavenderBlush" ;

  return renderujHtmlSablonu(__DIR__ . '/../elementy-html-php/ladici-vypis.php', $massageData) ;
}

