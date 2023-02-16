<?php
include_once ('dbCon.php');
class Order extends dbCon{
	private $id;
	private $userid;
	private $orderdate;
	private $total;
    private $name;
	private $address;
	private $phone;

    public function __construct($userid='', $total='', $name='', $address='', $phone=''){
		$this->userid = $userid;
		$this->total = $total;
		$this->name = $name;
		$this->address = $address;
		$this->phone = $phone;
	    $this->dbCon=$this->connectDB();
    }

	public function getId(){
		return $this->id;
	}

	public function addOrder(){
		$sql = "INSERT INTO orders(userid, orderdate, name, address, phone, total) VALUES(?,?,?,?,?,?)";
		$sql2 = "SELECT * FROM orders ORDER BY ID DESC LIMIT 1";
		try{
			$stm = $this->dbCon->prepare($sql);
			$stm->execute([$this->userid, date(DATE_RFC2822), $this->name, $this->address, $this->phone,  $this->total]);
			$stm = $this->dbCon->prepare($sql2);
			$stm->execute();
			$result = $stm->fetchObject();
			$this->id = $result->id;
		}
		catch(PDOExecption $e){
			echo $e;
		}
    }

	public function getAllOrders(){
        $sql = "SELECT * FROM orders";
		try{
			$stm = $this->dbCon->prepare($sql);
			$stm->execute();
			return $stm->fetchAll();
		}
		catch(PDOExecption $e){
			echo $e;
		}
    }

}
?>
