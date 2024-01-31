<?php

namespace DP\behavioral\command;

interface Command
{
    public function handle(): void;
}