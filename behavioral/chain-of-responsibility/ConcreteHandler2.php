<?php

class ConcreteHandler2 extends BaseHandler
{
    public function handle(array $data): void
    {
        echo $data['value'] . ' ConcreteHandler2 text';
        $this->next($data);
    }
}