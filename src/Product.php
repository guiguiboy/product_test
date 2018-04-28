<?php
/**
 * Created by PhpStorm.
 * User: guigui
 * Date: 28/04/2018
 * Time: 15:06
 */

namespace Guigui\ProductTest;

use Guigui\ProductTest\Extractor\ExtractorInterface;
use Guigui\ProductTest\Extractor\Strategy;

class Product
{
    /**
     * @var string
     */
    protected $source;

    /**
     * @var array
     */
    protected $productData;

    /**
     * @var array
     */
    protected $cache = array();

    /**
     * @var ExtractorInterface
     */
    protected $strategy;

    public function __construct(string $source, array $productData)
    {
        $this->source      = $source;
        $this->productData = $productData;
        $this->strategy    = Strategy::build($source, $productData);
    }

    public function __call($name, $arguments)
    {
        //cache system may not be mandatory...
        $key = $name . implode('.', $arguments);
        if (isset($this->cache[$key])) {
            return $this->cache[$key];
        }
        return $this->cache[$key] = call_user_func(
            [
                $this->strategy, $name
            ], $arguments
        );
    }
}
