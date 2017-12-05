<?php

/**
 * 使对象可以像数组一样进行foreach循环,要求属性必须是私有.(Iterator模式的php实现,写一类实现Iterator接口) (腾讯)
 */
class ObjToArray implements \Iterator
{
    private $arr = [
        'id' => 1,
        'name' => 'php',
    ];

    public function current()
    {
        return current($this->arr);
    }

    public function key()
    {
        return key($this->arr);
    }

    public function next()
    {
        return next($this->arr);
    }

    public function rewind()
    {
        reset($this->arr);
    }

    public function valid()
    {
        return ($this->current() !== false);
    }
}

$t = new ObjToArray();
foreach ($t as $k => $v) {
    print($k . '=>' . $v) . PHP_EOL;
}
