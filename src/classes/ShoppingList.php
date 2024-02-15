<?php

class ShoppingList
{

    public array $items = [];

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function removeItem($index)
    {
        if (!in_array($index,$this->items)){
            unset($this->items[$index]);
            $this->items = array_values($this->items);
        } else {
            return "item inexistente";
        }

    }

    public function clearItems()
    {
        unset($this->items);
        $this->items = [];
    }
}
