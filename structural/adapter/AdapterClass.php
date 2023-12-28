<?php

readonly class AdapterClass implements Notification
{
    public function __construct(
        private SomeAPIClass $class
    ) {}

    public function send(): void
    {
        $this->class->login();
        $this->class->post();
    }
}