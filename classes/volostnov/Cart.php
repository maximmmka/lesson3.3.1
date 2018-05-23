<?php
namespace volostnov;

require_once './autoload.php';

class Cart
{
	private $products;

	public function addToCart($prod)
	{
		if (isset($prod)) {
			$key = $prod->getObjectName();
			if (!isset($this->products[$key])) {
				$this->products[$key] = $prod;
			}
		}
	}

	public function delFromCart($prod)
	{
		if (isset($prod)) {
			$key = $prod->getObjectName();
			unset($this->products[$key]);
		}
	}

	public function printCart()
	{
		if (isset($this->products)) {
			echo '<table>';
			echo '<tr><td>Товар</td><td>Стоимость</td><td>Доставка</td><td>Удаление</td></tr>';
			foreach ($this->products as $product) {
				$product->printForCart();
			}
			echo '</table>';
			echo '<h3>Итого с учётом доставки: '.$this->getTotal().'руб. </h3>';
			echo '<a href="printorder.php">Оформить заказ</a>';
		}
	}

	public function getTotal()
	{
		$sum = 0;
		foreach ($this->products as $key => $product) {
			$sum = $sum + $product->getPrice() + $product->getShipping();
		}
		return $sum;
	}

	public function getProducts()
	{
		if (isset($this->products)) {
			return $this->products;
		}
		return false;
	}
}
?>
