<?php
namespace volostnov;

require_once './autoload.php';

class Drink extends Product implements Fluid
{
	use volume;

	protected $volume;
	protected $alc;

	public function setAlc($alc)
	{
		$this->alc = $alc;
	}

	public function getAlc()
	{
		return $this->alc;
	}

	public function printAlc()
	{
		if ((isset($this->alc))&&($this->alc!=0))
			echo "<p>Крепость: $this->alc%</p>";
	}
}
?>
