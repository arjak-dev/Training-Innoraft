<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f3bb3a2fca257a1ab71ea3b38660397
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Subject\\' => 8,
            'Student\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Subject\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Subject',
        ),
        'Student\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Student',
        ),
    );

    public static $classMap = array (
        'Student\\Marks' => __DIR__ . '/../..' . '/src/Student/Marks.php',
        'Student\\StudentData' => __DIR__ . '/../..' . '/src/Student/StudentData.php',
        'Student\\StudentInterface' => __DIR__ . '/../..' . '/src/Student/StudentInterface.php',
        'Subject\\Subject' => __DIR__ . '/../..' . '/src/Subject/Subject.php',
        'Subject\\subjectInterface' => __DIR__ . '/../..' . '/src/Subject/SubjectInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f3bb3a2fca257a1ab71ea3b38660397::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f3bb3a2fca257a1ab71ea3b38660397::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9f3bb3a2fca257a1ab71ea3b38660397::$classMap;

        }, null, ClassLoader::class);
    }
}