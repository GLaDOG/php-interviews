<?php

/**
 * 用PHP实现一个双向队列(腾讯)
 */
class DoubleQueue
{
    private $queue = ['php', 'java', 'perl'];

    public function init()
    {
        return $this->queue;
    }

    public function addFirst($item)
    {
        return array_unshift($this->queue, $item);
    }

    public function addLast($item)
    {
        return array_push($this->queue, $item);
    }

    public function removeFirst()
    {
        return array_shift($this->queue);
    }

    public function removeLast()
    {
        return array_pop($this->queue);
    }
}

$queue = new DoubleQueue();

$queue->addFirst('js');
$queue->addLast('python');
print_r($queue->init());
$queue->removeFirst();
$queue->removeLast();
print_r($queue->init());
