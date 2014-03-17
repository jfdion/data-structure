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
        return $this->elements[count($this->elements) - 1];
    }

    public function pop()
    {
        return array_pop($this->elements);
    }

    public function isEmpty()
    {
        return count($this->elements) === 0;
    }
} 