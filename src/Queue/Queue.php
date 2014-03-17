<?php

namespace DataStructure\Queue;


class Queue
{

    private $elements = [];

    public function queue($element)
    {
        $this->elements[] = $element;
    }

    public function deque()
    {
        if ($this->isEmpty()) {
            throw new InvalidQueueException("Queue is empty");
        }
        return array_shift($this->elements);
    }

    public function isEmpty()
    {
        return count($this->elements) === 0;
    }
} 