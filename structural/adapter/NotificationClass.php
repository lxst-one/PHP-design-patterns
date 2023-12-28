<?php

class NotificationClass implements Notification
{

    public function send(): void
    {
        //Send notification...
        echo 'Notification...';
    }
}