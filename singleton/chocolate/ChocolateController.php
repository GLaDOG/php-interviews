<?php
require_once('ChocolateBoiler.php');

class ChocolateController
{
    public static function run()
    {
        $boiler = ChocolateBoiler::getInstance();
        $boiler->fill();
        $boiler->boil();
        $boiler->drain();

        $boiler2 = ChocolateBoiler::getInstance();
    }
}

ChocolateController::run();
