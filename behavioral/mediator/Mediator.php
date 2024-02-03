<?php

namespace DP\behavioral\mediator;

class Mediator implements MediatorInterface
{
    //You can create all components here to establish communication between them

    public function show(mixed $component, string $msg): void
    {
        if(get_class($component) === Component1::class) {
            $this->actionComponent1($msg);
        }

        if(get_class($component) === Component2::class) {
            $this->actionComponent2($msg);
        }
    }

    private function actionComponent1(string $msg): void
    {
        echo strtoupper($msg);
    }

    private function actionComponent2(string $msg): void
    {
        echo strtolower($msg);
    }
}