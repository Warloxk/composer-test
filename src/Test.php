<?php
namespace Warloxk\Test;

class Test
{
	public static function HelloWorld() : string
	{
		return 'Hello World!';
	}

	public static function Hello( string $name ) : string
	{
		return 'Hello ' . $name . '!';
	}
}