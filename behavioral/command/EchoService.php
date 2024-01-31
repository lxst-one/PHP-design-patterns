<?php

namespace DP\behavioral\command;

final readonly class EchoService
{
    public function echo1(): void
    {
        echo 'Message 1';
    }

    public function echo2(): void
    {
        echo 'Message 2';
    }
}