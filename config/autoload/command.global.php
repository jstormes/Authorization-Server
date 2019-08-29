<?php // config/autoload/command.global.php

declare(strict_types=1);

/**
 * This file routes console commands to controllers
 */

return [
    'dependencies' => [
        'invokables' => [
        ],

        'factories' => [
            App\Command\TestDbCommand::class => App\Command\TestDbCommandFactory::class,
        ],
    ],

    'console' => [
        'commands' => [
            App\Command\TestDbCommand::class,
        ],
    ],
];
