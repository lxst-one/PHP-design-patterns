<?php

require_once 'Notification.php';
require_once 'NotificationClass.php';
require_once 'AdapterClass.php';
require_once 'SomeAPIClass.php';

function notifyUser(Notification $notification): void
{
    $notification->send();
}

notifyUser(new NotificationClass());

// We can't change API class because it might be third-party library, so we create AdapterClass,
// that implements the Notification interface and make the necessary adjustments
notifyUser(new AdapterClass(new SomeAPIClass()));