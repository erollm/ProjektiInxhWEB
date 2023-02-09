<?php
include_once ('dbCon.php');
class Product extends dbCon{
    private $id;
    private $name;
    private $description;
    private $type;
    private $price;
    private $image;
    private $creationdate;

    public function __construct($name, $desc, $type, $price, $image){
        $this->name = $name;
        $this->description = $desc;
        $this->type = $type;
        $this->price = $price;
        $this->image = $image;
        $this->dbCon=$this->connectDB();
    }



    public function productExists(){
        $sql = "SELECT * FROM products WHERE name = :name AND description = :desc";
        try{
            $stm = $this->dbCon->prepare($sql);
            $stm->execute([':name'=>$this->name, ':desc'=>$this->description]);
            return $stm->rowCount() > 0;
        }
        catch(PDOExecption $e){
			echo $e;
		}
    }

    public function addProduct(){
        if(!$this->productExists()){
		$sql = "INSERT INTO products(name, description, type, price, image, creationdate) VALUES(?,?,?,?,?,?)";
		try{
			$stm = $this->dbCon->prepare($sql);
			$stm->execute([$this->name, $this->description, $this->type, $this->price, $this->image, date(DATE_RFC2822)]);
		}
		catch(PDOExecption $e){
			echo $e;
		}
        }
    }



}


?>