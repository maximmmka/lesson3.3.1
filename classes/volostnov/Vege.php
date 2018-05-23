<?php
namespace volostnov;

require_once './autoload.php';

class Vege extends Product //На этот товар скидка распространяется только если вес больше 10кг
{
	public function getPrice()
	{
		if ((isset($this->discount)) && ($this->weight>10)){
			$this->shipping = 300;
			return round($this->price*(100-$this->discount)/100,2);
		}
		else {
			$this->shipping = 250;
			return $this->price;
		}
	}
}
?>
