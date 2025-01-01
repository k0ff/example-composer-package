<?php
require_once('vendor/autoload.php');

use function K0ff\Hello\hello;


function main()
{
    hello();
}

if (php_sapi_name() === 'cli') {
    main();
}

