<?php declare(strict_types=1);

include __DIR__ . '/../vendor/autoload.php';

use Breux\Human\{
    Human,
    Life,
    Body,
    Head
};

$human = new Human(
    new Body(
        new Head
    ),
    new Life
);

echo json_encode($human);
//var_dump($human);
