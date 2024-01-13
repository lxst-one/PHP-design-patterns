<?php

namespace DP\structural\proxy;

readonly class ApiClient implements ApiInterface
{
    public function __construct(
        private ApiLib $api
    ) {}

    public function getData(): string
    {
      return $this->api->getText();
    }
}