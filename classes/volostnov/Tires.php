<?php
namespace volostnov;

require_once './autoload.php';

class Tires extends Product //На этот товар скидка не распространяется
{
	protected $discount = 0;
}
?>
