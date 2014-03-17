<?php
use DataStructure\Queue\Queue;

class QueueTest extends PHPUnit_Framework_TestCase {
    const AN_ELEMENT = self::FIRST_ELEMENT;
    const FIRST_ELEMENT = 1;
    const SECOND_ELEMENT = 2;

    /**
     * @var Queue
     */
    private $queue;

    public function setUp()
    {
        $this->queue = new Queue();
    }

    public function testANewQueueShouldBeEmpty()
    {
        $result = $this->queue->isEmpty();
        $this->assertTrue($result);
    }

    public function testGivenAnEmptyQueueWhenQueueingAnElementWillNotBeEmpty()
    {
        $this->queue->queue(self::AN_ELEMENT);
        $result = $this->queue->isEmpty();
        $this->assertFalse($result);
    }

    public function testGivenAQueueWithOneElementWhenDequeingWillBeEmpty()
    {
        $this->queue->queue(self::AN_ELEMENT);

        $this->queue->deque();
        $resultat = $this->queue->isEmpty();

        $this->assertTrue($resultat);
    }

    public function testGivenAnEmptyListWhenDequeingElementsWillReturnElementsInQueueingOrder()
    {
        $this->queue->queue(self::FIRST_ELEMENT);
        $this->queue->queue(self::SECOND_ELEMENT);

        $firstElement = $this->queue->deque();
        $secondElement = $this->queue->deque();

        $this->assertEquals(self::FIRST_ELEMENT, $firstElement);
        $this->assertEquals(self::SECOND_ELEMENT, $secondElement);
    }

    /**
     * @expectedException: \DataStructure\Queue\InvalidQueueException
     */
    public function testGivenAnEmptyStackWhenDequeingWillThrowInvalidQueueException()
    {
        $this->queue->deque();
    }
}
 