<?php
namespace Fakend;
require_once __DIR__ . '/vendor/autoload.php';
use Stringy\Stringy as S;

class FakendFactory {
    public static $schema;
    public static function create($schema){
        self::$schema = S::create($schema)->upperCamelize();
        $class = 'Fakend\\Schemas\\'.self::$schema;
        return new $class;
    }

}