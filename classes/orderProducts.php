<?php
include_once ('dbCon.php');
class OrderProducts extends dbCon{
	private $id;
	private $orderid;
	private $productid;
	private $quantity;


    public function __construct($orderid='', $productid='', $quantity='') {
        $this->orderid = $orderid;
        $this->productid = $productid;
        $this->quantity = $quantity;
		$this->dbCon=$this->connectDB();
    }

	public function getProducts($id){
		$sql = "SELECT p.name, p.price, op.quantity
        FROM products as p, orderproducts as op
        WHERE p.id = op.productid AND op.orderid = :id;";
	    try{
			$stm = $this->dbCon->prepare($sql);
			$stm->execute([':id'=>$id]);
			return $stm->fetchAll();
		}
	    catch(PDOExecption $e){
			echo $e;
		}
	}
    
	public function addOrderProducts(){
		$sql = "INSERT INTO orderproducts(orderid, productid, quantity) VALUES(?,?,?)";
		try{
			$stm = $this->dbCon->prepare($sql);
			$stm->execute([$this->orderid, $this->productid, $this->quantity]);
		}
		catch(PDOExecption $e){
			echo $e;
		}
    }
}
?>