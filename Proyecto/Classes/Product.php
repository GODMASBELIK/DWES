<?php

class Product {
    private $idProduct;
    private $nameProduct;
    private $priceProduct;
    private $descriptionProduct;
    private $dateProduct;

    public function __construct($idProduct, $nameProduct, $priceProduct, $descriptionProduct, $dateProduct) {
        $this->idProduct = $idProduct;
        $this->nameProduct = $nameProduct;
        $this->priceProduct = $priceProduct;
        $this->descriptionProduct = $descriptionProduct;
        $this->dateProduct = $dateProduct;
    }
    // Example methods to access properties
    public function getIdProduct() {
        return $this->idProduct;
    }

    public function getNameProduct() {
        return $this->nameProduct;
    }

    public function getPriceProduct() {
        return $this->priceProduct;
    }

    public function getDescriptionProduct() {
        return $this->descriptionProduct;
    }

    public function getDateProduct() {
        return $this->dateProduct;
    }
}


?>