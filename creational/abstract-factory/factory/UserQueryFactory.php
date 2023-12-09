<?php

class UserQueryFactory implements RoleQueryFactory
{

    public function createEntitiesQuery(): RoleEntitiesQuery
    {
        return new UserEntitiesQuery();
    }

    public function createStatisticsQuery(): RoleStatisticsQuery
    {
        return new UserStatisticsQuery();
    }
}