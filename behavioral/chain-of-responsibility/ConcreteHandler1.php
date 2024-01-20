<?php

class ConcreteHandler1 extends BaseHandler
{
    public function handle(array $data): void
    {
        $data['value'] = strtoupper($data['value']);
        $this->next($data);
    }
}