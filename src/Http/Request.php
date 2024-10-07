<?php

namespace Fry\Framework\Http;

class Request 
{
    public static $instanz;

    /*
    * Hier setzten wir die wichtigen Daten, die wir aus einem Request bekommen sollen
    * Um mit dennen zu Arbeiten bzw. zu vearbeiten.
    */
    private function __construct(
        private array $server,
        private array $bekommen,
        private array $senden,
        private array $daten,
        private array $cookie,
        private array $env
    )
    {}
    
    /*
    * An dieser stelle schauen wir über es die "instanz" schon gibt
    * Sollte es nicht der fall sein, wird eine neue static instanz gebildet mit den Variablen die 
    * wir mit den wichtigen Informationen aus einem Request befüllen möchten.
    * Anschließend geben wir die instanz zurück und können so an die Informationen rankommen.
    */
    public static function erstellen()
    {
        if(static::$instanz === null) {
            static::$instanz = new static(
                $_SERVER,
                $_GET,
                $_POST,
                $_FILES,
                $_COOKIE,
                $_ENV
            );
        }

        return static::$instanz;
    }
}
