<?php

class AdminQueryFactory implements RoleQueryFactory
{

    public function createEntitiesQuery(): RoleEntitiesQuery
    {
        return new AdminEntitiesQuery();
    }

    public function createStatisticsQuery(): RoleStatisticsQuery
    {
        return new AdminStatisticsQuery();
    }
}