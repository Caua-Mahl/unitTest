<?php

use PHPUnit\Framework\TestCase;

require_once 'src/classes/MinhaClasse.php';

class MinhaClasseTest extends TestCase{
    
    public function testSoma()
    {
        $this->assertEquals(4, MinhaClasse::soma(2, 2));
        $this->assertEquals(-4, MinhaClasse::soma(-2, -2));
        $this->assertEquals(-4, MinhaClasse::soma(-6, +2));

        //Esses dois assertsEquals verificam se a função soma corretamente ao usar um 0 como um dos parametros somado tanto ao negativo quanto ao positio 
        $this->assertEquals(4, MinhaClasse::soma(0, +4));
        $this->assertEquals(-4, MinhaClasse::soma(-4,0));
    }

}
