<?php
/**
 * @class Item represents item in the shopping basket
 *
 * @author Vladimir Forejt
 */
class Item {
 
    private $tax = null;
    
    private $name;
    
    private $price;
    
    private $taxRate;
    
    private $dutyRate;
    
    /**
     * Creates new item
     * @param string $name item name
     * @param float $price item price
     * @param float $taxRate tax rate (ex: for 10%, put 0.1)
     * @param float $dutyRate duty rate (ex: for 10%, put 0.1)
     */
    function __construct($name, $price, $taxRate, $dutyRate) {
        $this->name = $name;
        $this->price = $price;
        $this->taxRate = $taxRate;
        $this->dutyRate = $dutyRate;
    }
            
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
        return $this;
    }
    
    public function getPrice() {
        return $this->price;
    }
    
    public function setPrice($price) {
        $this->price = $price;
        $this->tax = $this->recalculateTotalTax();
        return $this;
    }   
    
    public function getTaxRate() {
        return $this->taxRate;
    }
    
    public function setTaxRate($taxRate) {
        $this->taxRate = $taxRate;
        $this->tax = $this->recalculateTotalTax();
        return $this;
    }
    
    public function getDutyRate() {
        return $this->dutyRate;
    }
    
    public function setDutyRate($dutyRate) {
        $this->dutyRate = $dutyRate;
        $this->tax = $this->recalculateTotalTax();
        return $this;
    }
    
    public function getTotalTax() {
        if (is_null($this->tax)) {
            $this->tax = $this->recalculateTotalTax();
        }
        return $this->tax;
    }
    
    public function getPriceInclTax() {
        return $this->price + $this->tax;
    }
    
    /**
     * Calculates total tax applicable on the item (=tax + import duty)
     * @return float tax
     */
    private function recalculateTotalTax() {
        $tax = $this->roundTax($this->price * $this->taxRate);
        $duty = $this->roundTax($this->price * $this->dutyRate);
        return $tax + $duty;
    }
    
    /**
     * Rounds up to the nearest 0.05
     * Example: 23.21 => 23.25; 23.26 => 23.30
     * @param float $tax tax value to be rounded
     * @return float rounded tax
     */
    private function roundTax($tax) {
        return ceil($tax / 0.05) * 0.05;
    }
    
}
