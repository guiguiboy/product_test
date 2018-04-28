<?php
/**
 * Created by PhpStorm.
 * User: guigui
 * Date: 28/04/2018
 * Time: 22:48
 */

namespace Guigui\ProductTest\Extractor;

abstract class AbstractExtractor
{
    /**
     * @var array
     */
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
}
