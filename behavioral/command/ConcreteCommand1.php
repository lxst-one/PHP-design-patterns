<?php

namespace DP\behavioral\command;

final readonly class ConcreteCommand1 implements Command
{

    public function handle(): void
    {
        $service = new EchoService();
        $service->echo1();
    }
}