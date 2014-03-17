<?php


namespace DataStructure\Stack;


class Stack
{
    private $elements = [];

    public function push($element)
    {
        $this->elements[] = $element;
    }

    public function top()
    {
        $this->stackNotEmpty();
        return $this->elements[count($this->elements) - 1];
    }

    public function pop()
    {
        $this->stackNotEmpty();
        return array_pop($this->elements);
    }

    public function isEmpty()
    {
        return count($this->elements) === 0;
    }

    private function stackNotEmpty()
    {
        if ($this->isEmpty()) {
            throw new InvalidStackException("Stack is empty");
        }
    }
} 