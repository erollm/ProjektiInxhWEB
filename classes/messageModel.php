<?php
include_once ('dbCon.php');
class Message extends dbCon{
	private $id;
	private $fullname;
	private $email;
	private $subject;
	private $message;
	private $creationdate;

	public function __construct($name='', $email='', $subject='', $message=''){
		$this->fullname = $name;
		$this->email = $email;
		$this->subject = $subject;
		$this->message = $message;
		$this->creationdate = date(DATE_RFC2822);
		$this->dbCon=$this->connectDB();
	}

	public function sendMessage(){
		$sql = "INSERT INTO messages(fullname, email, subject, message, creationdate) VALUES(?,?,?,?,?)";
		try{
			$stm = $this->dbCon->prepare($sql);
			$stm->execute([$this->fullname, $this->email, $this->subject, $this->message, $this->creationdate]);
		}
		catch(PDOExecption $e){
			echo $e;
		}
	}

	public function deleteMessage($id){
		$sql = "DELETE FROM messages WHERE id=?";
		try{
			$stm = $this->dbCon->prepare($sql);
			$stm->execute([$id]);
		}
		catch(PDOExecption $e){
			echo $e;
		}
	}
	
	public function getAllMessages(){
		$sql = "SELECT * FROM messages";
		try{
			$stm = $this->dbCon->prepare($sql);
			$stm->execute();
			return $stm->fetchAll();
		}
		catch(PDOExecption $e){
			echo $e;
		}
	}

	public function getTotalofmessages(){
		$sql = "SELECT * FROM messages";
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