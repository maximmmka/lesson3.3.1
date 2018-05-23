<?php
namespace volostnov;

require_once './autoload.php';

class MotorOil extends Product implements Fluid
{
	use volume;

	protected $viscosity;

	public function setViscosity($viscosity)
	{
		$this->viscosity = $viscosity;
	}

	public function getViscosity()
	{
		return $this->viscosity;
	}

	public function printViscosity()
	{
		echo "Вязкость: $this->viscosity";
	}
}
?>
