<?php

interface RoleQueryFactory
{
    public function createEntitiesQuery(): RoleEntitiesQuery;

    public function createStatisticsQuery(): RoleStatisticsQuery;
}