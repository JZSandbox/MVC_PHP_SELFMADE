<?php
/* 
* Base path ist eine Konstante Globale Variable, die man überall benutzten kann
* Kann nicht verändert werden.
*/
define("HAUPT_ORDNER", dirname(__DIR__));

/*
* Jetzt Importieren wir die Autoload.php, damit wir unsere Klassen autoloaden können und nicht immer "requier_once" benutzten müssen.
*/

require HAUPT_ORDNER . '/vendor/autoload.php';
/* Das ist unser Front Controller */

echo "Hello world";
