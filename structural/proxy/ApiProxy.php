<?php

namespace DP\structural\proxy;

class ApiProxy implements ApiInterface
{
    private string|null $cachedData = null;

    public function __construct(
        private readonly ApiLib $api,
    ) {}

    public function getData(): string
    {
        if(!$this->cachedData) {
            $this->cachedData = $this->api->getText();
        }

        return $this->cachedData;
    }
}