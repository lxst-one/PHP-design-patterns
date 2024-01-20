<?php

interface Handler
{
    public function setNext(Handler $next): void;

    public function handle(array $data): void;
}