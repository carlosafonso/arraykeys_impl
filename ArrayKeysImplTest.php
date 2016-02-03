<?php

require __DIR__ . '/vendor/autoload.php';

class ArrayKeysImplTest extends PHPUnit_Framework_TestCase
{
	function testArrayKeysImpl()
	{
		$a = [0 => 100, 'color' => 'red'];
		$this->assertEquals(array_keys($a), array_keys_impl($a));

		$b = ['blue', 'red', 'green', 'blue', 'blue'];
		$this->assertEquals(array_keys($b, 'blue'), array_keys_impl($b, 'blue'));

		$c = [
			'color' => ['blue', 'red', 'green'],
			'size'  => ['small', 'medium', 'large']
		];
		$this->assertEquals(array_keys($c), array_keys_impl($c));

		// some additional tests
		$d = ['foo' => 1, 'bar' => '1'];
		$this->assertEquals(array_keys($d, 1), array_keys_impl($d, 1));
		$this->assertEquals(array_keys($d, 1, true), array_keys_impl($d, 1, true));
	}
}
