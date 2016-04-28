<?php
class test {
	public $publ = false;
	private $priv = true;
	protected $prot = 42;
}

$t = new test;
$t -> publ = $t;

$data = array(
	'1' => 'just one',
	'2' => array(
			'2.1' => array(
				'2.1.0' => 210,
				'2.1.1' => array(
					'2.1.1.0' => 3.1415,
					'2.1.1.1' => 2.7,	
				)
			)
		),
	'3' => $t,
	'4' => range(0, 5),
	);
var_dump($data);
?>