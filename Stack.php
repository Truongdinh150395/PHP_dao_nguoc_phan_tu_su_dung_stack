<?php


class Stack
{
    public $stack;
    public $limit;
    public function __construct()
    {
        $this->stack = array();
    }

    public function add($arr)
    {
      return $this->stack = $arr;
    }

    public function pop($arr)
    {

        return array_reverse($arr);
    }
}
$arr=[1,2,3,4,5];
$a=new Stack();
$a->add($arr);
echo "<pre>";

print_r($a->pop($arr));