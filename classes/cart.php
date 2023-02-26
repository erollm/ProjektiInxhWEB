<?php
include_once ('productModel.php');
class Cart {
    private $items = [];

    public function __construct() {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        $this->items = &$_SESSION['cart'];
    }

    public function add($item, $quantity = 1) {
        if(is_numeric($item) && intval($item) > 0){
          if (isset($this->items[$item])) {
              $this->items[$item] += $quantity;
          } else {
              $this->items[$item] = $quantity;
          }
        }
    }

    public function remove($item) {
        if (isset($this->items[$item])) {
            unset($this->items[$item]);
        }
    }

    public function clear(){
        $this->items = [];
    }

    public function update($item, $quantity) {
        if($quantity == 0){
            $this->remove($item);
        }
        if($quantity > 0 && $quantity < 100){
        $this->items[$item] = $quantity;
        }
    }

    public function count() {
        return count($this->items);
    }
    
    public function getCart(){
        return $this->items;
    }

    public function getProducts(){
        $product = new Product();
        $products = [];
        foreach($this->items as $id=>$quantity){
            $tempP = $product->returnProduct($id);
            array_push($products, ['id'=>$id, 'name'=>$tempP['name'], 'quantity'=>$quantity, 'price'=>$tempP['price']]);
        }
        return $products;
    }

    public function getTotal(){
        $product = new Product();
        $total = 0;
        foreach($this->items as $id=>$quantity){
            $tempP = $product->returnProduct($id);
            $total += $tempP['price']*$quantity;
        }
        return $total;
    }

}

$cart = new Cart();


?>