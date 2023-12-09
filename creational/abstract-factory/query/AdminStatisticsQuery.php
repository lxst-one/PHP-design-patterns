<?php

class AdminStatisticsQuery implements RoleStatisticsQuery
{

    public function statistics(): string
    {
        return 'Admin Statistics';
    }
}