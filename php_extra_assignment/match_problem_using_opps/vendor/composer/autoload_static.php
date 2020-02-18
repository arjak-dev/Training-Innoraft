<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit944a5464b017423c167a6af9786b9431
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TeamData\\' => 9,
        ),
        'P' => 
        array (
            'PlayerData\\' => 11,
        ),
        'M' => 
        array (
            'MatchData\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TeamData\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/TeamData',
        ),
        'PlayerData\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/PlayerData',
        ),
        'MatchData\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/MatchData',
        ),
    );

    public static $classMap = array (
        'MatchData\\Match' => __DIR__ . '/../..' . '/src/MatchData/Match.php',
        'PlayerData\\Player' => __DIR__ . '/../..' . '/src/PlayerData/Player.php',
        'TeamData\\Team' => __DIR__ . '/../..' . '/src/TeamData/Team.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit944a5464b017423c167a6af9786b9431::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit944a5464b017423c167a6af9786b9431::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit944a5464b017423c167a6af9786b9431::$classMap;

        }, null, ClassLoader::class);
    }
}