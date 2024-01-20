<?php

abstract class BaseHandler implements Handler
{
    protected Handler|null $next = null;

    public function setNext(Handler $next): void
    {
        $this->next = $next;
    }

    protected function next(array $data): void
    {
        if($this->next) {
            $this->next->handle($data);
        }
    }
}