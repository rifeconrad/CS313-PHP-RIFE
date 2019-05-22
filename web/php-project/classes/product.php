<?php
	class Product {
		public $name;
		public $price;
		public $quantity;

		public function Product($name, $price) {
        	$this->name = $name;
        	$this->price= $price;
    	}
	}
?>