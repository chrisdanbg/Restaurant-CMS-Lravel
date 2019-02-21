<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    
    }

    public function add($item,$id)
    {
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item'=> $item];
        if ($this->items != null) {
            if (array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    public function remove($item,$id)
    {
        if ($this->items != null) {
            if (array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
                $storedItem['qty']--;
                $storedItem['price'] = $item->price * $storedItem['qty'];
                $this->items[$id] = $storedItem;

                if ($this->items[$id]['qty'] == 0)
                {
                    unset($this->items[$id]);
                }
                
                $this->totalQty--;
                $this->totalPrice -= $item->price;
            }
        }
    }
}