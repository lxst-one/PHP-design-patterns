<?php

class UserStatisticsQuery implements RoleStatisticsQuery
{

    public function statistics(): string
    {
        return 'User Statistics';
    }
}