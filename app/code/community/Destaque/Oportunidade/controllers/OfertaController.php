<?php
class Destaque_Oportunidade_OfertaController extends Mage_Core_Controller_Front_Action
{
    public function oportunidadeAction()
    {
        $this->loadLayout();
        echo $this->getLayout()->createBlock('produto/produto')
            ->setTemplate('oportunidade/oferta.phtml')->toHtml();
    }
}