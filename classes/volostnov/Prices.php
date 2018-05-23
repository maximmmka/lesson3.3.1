<?php
namespace volostnov;

interface Prices
{	
	public function setPrice($price);
	public function setShipping($shipping);
	public function setDiscount($discount);
	public function setWeight($weight);
	public function getPrice();
	public function getShipping();
	public function getDiscount();
	public function getWeight();
	public function printPrice();
	public function printShipping();
}
?>