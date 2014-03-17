<?php
use DataStructure\Stack\Stack;

class StackTest extends PHPUnit_Framework_TestCase {
    const AN_ELEMENT = self::FIRST_ELEMENT;
    const FIRST_ELEMENT = 1;
    const SECOND_ELEMENT = 2;

    /**
     * @var Stack
     */
    private $stack;

    public function setUp()
    {
        $this->stack = new Stack();
    }

    public function testANewStackShouldBeEmpty()
    {
        $resultat = $this->stack->isEmpty();
        $this->assertTrue($resultat);
    }

    public function testAnEmptyStackWhenPushingAnElementWillNotBeEmpty()
    {
        $this->stack->push(self::AN_ELEMENT);
        $resultat = $this->stack->isEmpty();
        $this->assertFalse($resultat);
    }

    public function testAStackWithOneElementWhenPopingWillBeEmpty()
    {
        $this->stack->push(self::AN_ELEMENT);

        $this->stack->pop();
        $resultat = $this->stack->isEmpty();

        $this->assertTrue($resultat);
    }

    public function testAStackWithOneElementWhenLookingTopWillNotRemoveElement()
    {
        $this->stack->push(self::AN_ELEMENT);

        $this->stack->top();
        $resultat = $this->stack->isEmpty();

        $this->assertFalse($resultat);
    }

    public function testAStackWithTwoElementsWhenLookingTopWillReturnLastElement()
    {
        $this->stack->push(self::FIRST_ELEMENT);
        $this->stack->push(self::SECOND_ELEMENT);

        $resultat = $this->stack->top();

        $this->assertEquals(self::SECOND_ELEMENT, $resultat);
    }

    public function testAStackWithTwoElementsWhenPopingWillReturnElementInReverseOrder()
    {
        $this->stack->push(self::FIRST_ELEMENT);
        $this->stack->push(self::SECOND_ELEMENT);

        $secondElement = $this->stack->pop();
        $firstElement = $this->stack->pop();

        $this->assertEquals(self::SECOND_ELEMENT, $secondElement);
        $this->assertEquals(self::FIRST_ELEMENT, $firstElement);
    }

    /**
     * @expectedException \DataStructure\Stack\InvalidStackException
     */
    public function testAnEmptyStackWhenLookingTopWillThrowAnInvalidStackException()
    {
        $this->stack->top();
    }

    /**
     * @expectedException \DataStructure\Stack\InvalidStackException
     */
    public function testAnEmptyStackWhenPopingWillThrowAnInvalidStackException()
    {
        $this->stack->pop();
    }
}
 