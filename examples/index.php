<?php declare(strict_types=1);

include __DIR__ . '/../vendor/autoload.php';

use Breux\Human\{
    Human,
    Life,
    Body,
    Head
};

echo json_encode(new Human(
    new Body(
        new Head
    ),
    new Life
), JSON_PRETTY_PRINT);
