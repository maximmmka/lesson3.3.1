<?php
namespace volostnov;

require_once './autoload.php';

class Toy extends Product implements Ages
{
	protected $minAge;
	protected $maxAge;

	public function setAges($minAge, $maxAge)
	{
		$this->minAge = $minAge;
		$this->maxAge = $maxAge;
	}

	public function getMinAge()
	{
		return $this->minAge;
	}

	public function getMaxAge()
	{
		return $this->maxAge;
	}

	public function printAges()
	{
		if ((isset($this->minAge))&&(isset($this->minAge))) 
			echo "<p>Для детей от $this->minAge до $this->maxAge лет</p>";
	}
}
?>
