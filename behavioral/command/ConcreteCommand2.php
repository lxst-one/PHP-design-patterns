<?php

namespace DP\behavioral\command;

final readonly class ConcreteCommand2 implements Command
{

    public function handle(): void
    {
        $service = new EchoService();
        $service->echo2();
    }
}