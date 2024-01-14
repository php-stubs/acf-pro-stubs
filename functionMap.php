<?php

/**
 * This array is in the same format as the function map array in PHPStan:
 *
 * '<function_name>' => ['<return_type>', '<arg_name>'=>'<arg_type>']
 *
 * @link https://github.com/phpstan/phpstan-src/blob/1.5.x/resources/functionMap.php
 */
return [
    'have_rows' => ['bool', '@phpstan-impure' => ''],
];
