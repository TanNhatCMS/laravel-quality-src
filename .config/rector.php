<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\ValueObject\PhpVersion;
use RectorLaravel\Set\LaravelLevelSetList;
use Rector\Set\ValueObject\LevelSetList;
use RectorLaravel\Set\LaravelSetList;

return static function (RectorConfig $rectorConfig): void {
    // Tự động load autoload của project Laravel
    $rectorConfig->autoloadPaths([
        __DIR__ . '/../vendor/autoload.php',
    ]);

    // Thư mục hoặc file muốn phân tích
    $rectorConfig->paths([
        __DIR__ . '/../app',
        __DIR__ . '/../routes',
        __DIR__ . '/../database',
        __DIR__ . '/../tests',
    ]);

    // Loại trừ vendor và các file không cần thiết
    $rectorConfig->skip([
        __DIR__ . '/../storage',
        __DIR__ . '/../bootstrap/cache',
        __DIR__ . '/../vendor',
    ]);

    // PHP Version
    $rectorConfig->phpVersion(PhpVersion::PHP_82);

    // Các bộ quy tắc áp dụng
    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_82,     // refactor để tương thích PHP 8.2
        LaravelLevelSetList::UP_TO_LARAVEL_100,    // các cải tiến và chuyển đổi trong Laravel 10
        LaravelSetList::LARAVEL_CODE_QUALITY,
        LaravelSetList::LARAVEL_COLLECTION,
        //SetList::CODE_QUALITY,          // cải thiện chất lượng mã
        // SetList::DEAD_CODE,             // xóa code không còn sử dụng
        //SetList::TYPE_DECLARATION,      // thêm type declaration vào function/method
    ]);
};
