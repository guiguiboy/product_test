<?php
/**
 * Created by PhpStorm.
 * User: guigui
 * Date: 28/04/2018
 * Time: 21:55
 */

namespace Guigui\ProductTest\Extractor;

class Es extends AbstractExtractor implements ExtractorInterface
{
    public function getEan()
    {
        return $this->data['productId'];
    }

    public function getPrice()
    {
        return $this->data['price']['values']['standard'] ?? '';
    }

    public function getNutritions()
    {
        $nutritions = [];
        if (isset($this->data['pdctValNutriGlucides'])) {
            $nutritions['glucides'] = $this->data['pdctValNutriGlucides'];
        }
        return $nutritions;
    }
}
