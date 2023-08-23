<?php

use Rector\Config\RectorConfig;
use Frosh\Rector\Set\ShopwareSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([
        ShopwareSetList::SHOPWARE_6_5_0
    ]);
};
