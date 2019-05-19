<?php

class CategorieManager extends Model
{ 
    public function getCategories(){
        return $this->getAll('categories', 'Categorie');
    }
}
