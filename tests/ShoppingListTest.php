<?php

use PHPUnit\Framework\TestCase;

require_once 'src/classes/ShoppingList.php';

class ShoppingListTest extends TestCase {

    public function testAddItem(){
        $teste = new ShoppingList;
        $teste->addItem("banana");
        $items = $teste->getItems();
        $this->assertEquals("banana", $items[0]);
    }

    public function testRemoveItem(){
        $teste = new ShoppingList;
        $teste->addItem("banana");
        $teste->addItem("maçã");
        $teste->removeItem(0);
        $items = $teste->getItems();
        $this->assertEquals("maçã", $items[0]);
    }

    /*
    Exercícios:
        1. Interpretação:
            a) Qual é o propósito da classe ShoppingList?

                A classe ShoppingList é um objeto que guarda em sua variavel Items uma array de itens, esses que podem ser adicionados e excluídos de acordo com seus métodos, os itens armazenados podem ser recuperados através do getItems.
            
            b) Quais são os métodos disponíveis na classe ShoppingList e o que cada um
            deles faz?
            
                getItem = pega todos os itens armazenados no objeto.
                addItem = adiciona um item na variavel de array Items do objeto.
                removeItem = remove um item na variavel de array Items do objeto.

            c) Explique o que é testado no método testAddItem().

                É testado se o método realmente está adicionando um item para variavel do objeto.
            
            d) Qual é a finalidade do método testRemoveItem() e o que ele verifica?

                É testado se o método realmente está removendo um item para variavel do objeto.

    */

    /* 2. Desenvolvimento:
        a) Adicione um novo método de teste na classe ShoppingListTest para verificar se o método addItem() trata corretamente a adição de itens duplicados.*/

    public function testAdicionarDuplicados(){
        $teste = new ShoppingList;
        $teste->addItem("banana");
        $teste->addItem("banana");
        $items = $teste->getItems();
        $this->assertEquals("banana", $items[1]); // pesquisar qual assert correto para situação
    }

        //b) Escreva um cenário de teste adicional na classe ShoppingListTest para garantir que o método removeItem() lida corretamente com a tentativa de remover um item que não existe na lista.

    public function testRemoverInexistente(){
         $teste = new ShoppingList;
         $teste->addItem("banana");
         $teste->addItem("maçã");
         $this->assertEquals(, $teste->removeItem(9));
    }

        //c) Desenvolva um método na classe ShoppingList chamado clearItems() que limpa todos os itens da lista de compras. Em seguida, crie um novo método de teste naclasse ShoppingListTest para garantir que o método clearItems() remova todos os itens da lista.
    public function testClearItems(){
        $teste = new ShoppingList;
        $teste->addItem("banana");
        $teste->addItem("maçã");
        $teste->clearItems();
        $itens= $teste->getItems();
        $this->assertnotContains("banana", $itens, "contém banana");
        $this->assertnotContains("maçã", $itens, "contém maçã");

    }
}


?>