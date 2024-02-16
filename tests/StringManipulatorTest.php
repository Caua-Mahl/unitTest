<?php 

use PHPUnit\Framework\TestCase;
require_once 'src/classes/StringManipulator.php';

class StringManipulatorTest extends TestCase {

    public function testCapitalizeStringVazia()
    {
        $this->assertEquals("", StringManipulator::capitalizeString(""));
        $this->assertEquals(0,strlen(StringManipulator::capitalizeString("")));
    }

    public function testConcatenateStringComEspaços()
    {
        $a = "Ca uã Ma hl";
        $this->assertEquals(strlen($a), strlen(StringManipulator::concatenateString("Ca uã", " Ma hl")));
        $this->assertEquals($a, StringManipulator::concatenateString("Ca uã", " Ma hl"));
    }

    public function testCountVowels()
    {
        $this->assertEquals(5, StringManipulator::countVowels("Tenho 5 vogais"));
        $this->assertEquals(7, StringManipulator::countVowels("paralelepipedo"));
        $this->assertEquals(0, StringManipulator::countVowels("KKKKKKKK"));
        $this->assertEquals(0, StringManipulator::countVowels(""));
        $this->assertEquals(0, StringManipulator::countVowels("3704"));
        $this->assertEquals(10, StringManipulator::countVowels("AaEeIiOoUu"));
    }

}




?>