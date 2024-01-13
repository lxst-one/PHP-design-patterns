<?php

namespace DP\structural\proxy;

require_once 'ApiInterface.php';
require_once 'ApiLib.php';
require_once 'ApiClient.php';
require_once 'ApiProxy.php';

$apiCalls = 3;
$api = new ApiLib();

//Both objects have same interface
$apiClient = new ApiClient($api);
$apiProxy = new ApiProxy($api);

for($i=0; $i<$apiCalls; $i++) {
    $apiClientStartTime = microtime(true);
    echo $apiClient->getData();
    echo microtime(true) - $apiClientStartTime, PHP_EOL;

    //Using proxy cache class, making api calls is much faster
    $apiProxyStartTime = microtime(true);
    echo $apiProxy->getData();
    echo microtime(true) - $apiProxyStartTime, PHP_EOL;
}