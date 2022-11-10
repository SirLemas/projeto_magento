<?php

class Destaque_Oportunidade_Block_Produto extends Mage_Core_Block_Template
{
    public function getProduct()
    {
        $product = Mage::getModel('catalog/product')->load(1);
        return $product;
    }
}