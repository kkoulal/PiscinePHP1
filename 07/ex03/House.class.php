<?php
    abstract class House{
        abstract function getHouseName();
        abstract function getHouseMotto();
        abstract function getHouseSeat();
    public function introduce(){
        print("House " . $this->getHousename() . " of " . $this->getHouseseat() . ' : "'  . $this->getHouseMotto() . '"' . PHP_EOL);
    }
}
?>