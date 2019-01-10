<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use function HexletBasics\Asserts\expectOutputString;

$path = __DIR__ . '/index.php';

$expected = "125\n7500";
require $path;

expectOutputString($expected, function () use ($path) {
    require $path;
});
