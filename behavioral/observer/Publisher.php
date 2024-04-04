<?php

class Publisher
{
    /** @var Subscriber[] $subscribers */
    public function __construct(
        private array $subscribers
    )
    {

    }

    public function subscribe(Subscriber $subscriber): void
    {
        $this->subscribers[] = $subscriber;
    }

    public function notifySubscribers(): void
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->update();
        }
    }
}