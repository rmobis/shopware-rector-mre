<?php

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(TypedPropertyFromStrictConstructorRector::class);
};
