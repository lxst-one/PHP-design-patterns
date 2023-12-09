<?php

require_once 'contract/RoleQueryFactory.php';
require_once 'contract/RoleEntitiesQuery.php';
require_once 'contract/RoleStatisticsQuery.php';
require_once 'query/AdminEntitiesQuery.php';
require_once 'query/AdminStatisticsQuery.php';
require_once 'query/UserEntitiesQuery.php';
require_once 'query/UserStatisticsQuery.php';
require_once 'factory/AdminQueryFactory.php';
require_once 'factory/UserQueryFactory.php';

function getQueryResult(RoleQueryFactory $factory): void
{
    echo $factory->createEntitiesQuery()->entities();
    echo $factory->createStatisticsQuery()->statistics();
}

$adminQueryFactory = new AdminQueryFactory();
$userQueryFactory = new UserQueryFactory();

getQueryResult($adminQueryFactory);
getQueryResult($userQueryFactory);