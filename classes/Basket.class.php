<?php
/**
 * @class Basket represents a shopping basket
 *
 * @author Vladimir Forejt
 */
class Basket {
    
    private $items = [];
    
    private $totalWithoutTax = 0.0;
        
    private $totalTax = 0.0;
    
    public function addItem(Item $item) {
        $this->items[] = $item;
        
        $this->totalWithoutTax += $item->getPrice();
        
        $this->totalTax += $item->getTotalTax();
        
    }
    
    /**
     * 
     * @return array array of all items in the basket
     */
    public function getAllItems() {
        return $this->items;
    }
       
    /**
     * Returns total price of the items in the basket without tax
     * @return float total price
     */
    public function getTotalPriceWithoutTax() {
        return $this->totalWithoutTax;
    }
    
    /**
     * Returns total price of the items in the basket including tax
     * @return float total price
     */
    public function getTotalPriceInclTax() {
        return $this->totalWithoutTax + $this->totalTax;
    }
    
    /**
     * Returns total tax applicable on the basket items
     * @return float total tax
     */
    public function getTotalTaxPaid() {
        return $this->totalTax;      
    }
    
   
}
