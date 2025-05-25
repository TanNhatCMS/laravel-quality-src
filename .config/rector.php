<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Laravel\Set\LaravelSetList;

return static function (RectorConfig $rectorConfig): void {

       $rectorConfig->sets([
           LevelSetList::UP_TO_PHP_74,
           LaravelSetList::LARAVEL_70
       ]);
};