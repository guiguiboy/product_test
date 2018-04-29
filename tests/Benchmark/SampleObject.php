<?php
/**
 * Created by PhpStorm.
 * User: guigui
 * Date: 29/04/18
 * Time: 15:10
 */

namespace tests\Benchmark;

class SampleObject
{
    protected $value;

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
