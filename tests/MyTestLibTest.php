<?php

use PHPUnit\Framework\TestCase;
use MyPhpLibraryTest\MyTestLib;

class MyTestLibTest extends TestCase
{
    public function testSomeMethod()
    {
        $library = new MyTestLib();
        $result = $library->checkVal("sanjay");
        $this->assertEquals("Value length is 6", $result);
    }
}