<?php

function check_connection($endpoints)
{
    foreach ($endpoints as $endpoint) {
        $atoms = explode(' ', $endpoint);
        $connection = @fsockopen($atoms[0], $atoms[1], $errno, $errstr, 10);
        $result_line = $endpoint . ' >>> ';
        if (!$connection) {
            $result_line .= $errstr . "\n";
        } else {
            $result_line .= "OK\n";
        }
        echo $result_line;
    }
    echo "\n\n";
}

$prod_endpoints = array(
     "127.0.0.1 80",
     "127.0.0.1 80""
);

echo "===PROD ENDPOINT CHECK===\n\n";
check_connection($prod_endpoints);

