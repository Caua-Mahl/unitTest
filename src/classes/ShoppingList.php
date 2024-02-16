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
        if (isset($this->items[$index])) {
            unset($this->items[$index]);
            $this->items = array_values($this->items);
            return true;
        }
        return false;
    }

    public function clearItems()
    {
        unset($this->items);
        $this->items = [];
    }
}
