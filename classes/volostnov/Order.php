<?php
namespace volostnov;

require_once './autoload.php';

class Order
{
	private $products;

	public function __construct($cart)
	{
		$this->products = $cart->getProducts();
	}

	public function printOrder()
	{
		if (isset($this->products)) {
			echo '<h2>Ваш заказ</h2>';
			echo '<table>';
			echo '<tr><td>Товар</td><td>Стоимость</td><td>Доставка</td></tr>';
			foreach ($this->products as $product) {
				$product->printForOrder();
			}
			echo '</table>';
			echo '<h3>Итого с учётом доставки: '.$this->getTotal().'руб. </h3>';
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

}

?>
