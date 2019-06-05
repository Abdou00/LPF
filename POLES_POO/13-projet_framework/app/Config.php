<?php
class Config{

	protected $parameters;

	public function __construct()
	{
		require __DIR__ . '/config/parameters.php';

		$this->parameters = $parameters;
	}
	public function getParametersConnect()
	{
		return $this->parameters['connect'];
	}
}
//---------------------------------------------------
// $conf = new Config;

// print '<pre>';
// 	print_r( $conf->getParametersConnect() );
// print '</pre>';














