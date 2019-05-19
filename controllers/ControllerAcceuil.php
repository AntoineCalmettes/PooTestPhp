<?php

class ControllerAcceuil
{

    private $_categorieManager;
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count($url)>1){

            throw new Exception('Page Introuvable');
        } else {
            $this->categories();
        }
    }

    private function categories()
    {
        $this->_categorieManager = new CategorieManager;
        $categories = $this->_categorieManager->getCategories();

        require_once('views/viewAcceuil.php');
    }
}
