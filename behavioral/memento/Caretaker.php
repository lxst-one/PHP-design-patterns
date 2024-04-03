<?php

class Caretaker
{

    /** @var ConcreteMemento[] $snapshots */
    public function __construct(
        private array $snapshots = []
    )
    {

    }

    public function push($snapshot): void
    {
        $this->snapshots[] = $snapshot;
    }

    public function pop(): ConcreteMemento
    {
        return array_pop($this->snapshots);
    }
}