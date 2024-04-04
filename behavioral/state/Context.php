<?php

class Context
{
    public function __construct(
        private State $state
    )
    {
        $this->transitionTo($state);
    }

    public function update(): void
    {
        $this->state->update();
    }

    public function create(): void
    {
        $this->state->create();
    }

    public function transitionTo(State $state): void
    {
        $this->state = $state;
        $this->state->setContext($this);
    }
}