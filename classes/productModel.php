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

    public function __construct($name='', $desc='', $type='', $price='', $image=''){
        $this->name = $name;
        $this->description = $desc;
        $this->type = $type;
        $this->price = $price;
        $this->image = $image;
        $this->dbCon=$this->connectDB();
    }

	public function getId(){
		return $this->id;
	}

    public function getName(){
		return $this->name;
	}
	public function setName($name){
		$this->name = $name;
	}

	public function getDescription(){
		return $this->description;
	}
	public function setDescription($desc){
		$this->description = $desc;
	}

	public function getType(){
		return $this->type;
	}
	public function setType($type){
		$this->type = $type;
	}

	public function getPrice(){
		return $this->price;
	}
	public function setPrice($price){
		$this->price = $price;
	}

	public function getCreationdate(){
		return $this->creationdate;
	}



    public function getAllProducts(){
        $sql = "SELECT * FROM products";
		try{
			$stm = $this->dbCon->prepare($sql);
			$stm->execute();
			return $stm->fetchAll();
		}
		catch(PDOExecption $e){
			echo $e;
		}
    }

    public function productExists(){
        $sql = "SELECT * FROM products WHERE name = :name AND description = :desc AND id != :id";
        try{
            $stm = $this->dbCon->prepare($sql);
            $stm->execute([':name'=>$this->name, ':desc'=>$this->description, ':id'=>$this->id]);
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
    
	public function returnProduct($id){
		$sql = "SELECT name, price FROM products WHERE id = :id";
		try{
		    $stm = $this->dbCon->prepare($sql);
			$stm->execute([':id' => $id]);
			$result = $stm->fetch(PDO::FETCH_ASSOC);
			return $result;
		}catch(PDOExecption $e){
			echo $e;
		}
	}

    public function selectProduct($id){
        $sql = "SELECT * FROM products WHERE id=?";
		try{
			$stm = $this->dbCon->prepare($sql);
			$stm->execute([$id]);
			$result = $stm->fetchObject();
			$this->id = $result->id;
            $this->name = $result->name;
			$this->description = $result->description;
			$this->type = $result->type;
			$this->price = $result->price;
            $this->image = $result->image;
            $this->creationdate = $result->creationdate;
		}
		catch(PDOExecption $e){
			echo $e;
		}
    }

    public function deleteProduct($id){
	    $sql = "DELETE FROM products WHERE id=?";
		try{
			$stm = $this->dbCon->prepare($sql);
			$stm->execute([$id]);
		}
		catch(PDOExecption $e){
			echo $e;
		}
	}

	public function updateProduct(){
	    $sql = "UPDATE products SET name = :name, description = :desc, price = :price, type = :type WHERE id = :id";
		try{
			$stm = $this->dbCon->prepare($sql);
			$stm->execute([':name'=>$this->name, ':desc'=>$this->description, ':price'=>$this->price, ':type'=>$this->type,  ':id'=>$this->id]);
		}
		catch(PDOExecption $e){
			echo $e;
		}
	}

	public function getTotalofproducts(){
		$sql = "SELECT * FROM products";
		try{
			$stm = $this->dbCon->prepare($sql);
			$stm->execute();
			return $stm->rowCount();
		}
		catch(PDOExecption $e){
			echo $e;
		}
	}



}


?>