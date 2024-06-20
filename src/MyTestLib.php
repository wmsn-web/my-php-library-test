<?php
namespace MyPhpLibraryTest;
class MyTestLib
{
	
	public function checkVal(string $value)
	{
		$val = strlen($value);
		return "Value length is ".$val;
	}

	public function checkValInUrl(string $value)
	{
		
		return "http://".trim($value).".com";
	}
}