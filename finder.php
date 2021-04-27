<?php

return \StubsGenerator\Finder::create()
    ->in('source/advanced-custom-fields-pro')
    // For versions 5.6.0+
    ->notPath('assets/')
    ->notPath('lang/')
    ->sortByName()
;
