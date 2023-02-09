<?php 
include_once ('dbCon.php');
include_once ('validimi.php');
class User extends dbCon {
    private $id;
	private $username;
	private $email;
	private $password;
	private $role;
	protected $dbCon;

	public function __construct($user='', $email='', $pass=''){
		$this->username = strtolower($user);
		$this->email = strtolower($email);
		$this->password = $pass;
		$this->role = "user";
		$this->dbCon=$this->connectDB();
	}


    public function getUsername(){
		return $this->username;
	}
	public function setUsername($user){
		$this->username = $user;
	}

	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}

	public function getPassword(){
		return $this->password;
	}
	public function setPassword($password){
		$this->password = $password;
	}


	public function setRole($role){
		$this->role = $role;
	}

    public function valid(){
		$valid = new Validimi();
		return ($valid->validUsername($this->username) && $valid->validPassword($this->password) && $valid->validEmail($this->email));
	}

	public function validLogin(){
        $sql = "SELECT * FROM users WHERE username = :user and password = :password";
		$stm = $this->dbCon->prepare($sql);
		$stm->execute([':user' => $this->username, ':password' =>$this->password]);
		if($stm->rowCount() > 0){
			return ['result'=> true, 'role'=> $stm->fetchObject()->role];
		}
		else{
			return ['result'=> false];
		}
	}

	public function userExists(){
		$sql = "SELECT * FROM users WHERE username = :user";
		$stm = $this->dbCon->prepare($sql);
		$stm->execute([':user' => $this->username]);
		if($stm->rowCount() > 0){
		    return ['result' => true, 'message'=> 'Username already exists!'];
		}
		$sql = "SELECT * FROM users where email = :email";
		$stm = $this->dbCon->prepare($sql);
		$stm->execute([':email' => $this->email]);
		if($stm->rowCount() > 0){
			return ['result' => true, 'message'=> 'Email already exists!'];
		}
		return ['result' => false];
	}

	public function addUser(){
		if(!($this->userExists()['result']) && $this->valid()){
		$sql = "INSERT INTO users(username, email, password, role) VALUES(?,?,?,?)";
		try{
			$stm = $this->dbCon->prepare($sql);
			$stm->execute([$this->username, $this->email, $this->password, $this->role]);
		}
		catch(PDOExecption $e){
			echo $e;
		}
		}
	}
	

}

?>