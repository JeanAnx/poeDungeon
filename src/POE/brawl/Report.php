<?php

namespace POE\brawl;


class Report implements \Iterator
{
    public $comments = [];
    private $position = 0;

    public function __constructor($comments)
    {
        $this->comments = $comments;
    }

    public function append(string $commentLine)
    {
        $this->comments[] = $commentLine;
    }


    public function current()
    {
        $this->position = 0;
    }

    /**
     * Move forward to next element
     * @link https://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        var_dump(__METHOD__);
        ++$this->position;
    }

    /**
     * Return the key of the current element
     * @link https://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        var_dump(__METHOD__);
        return $this->position;
    }

    /**
     * Checks if current position is valid
     * @link https://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }

    /**
     * Rewind the Iterator to the first element
     * @link https://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        var_dump(__METHOD__);
        $this->position = 0;
    }
}