<?php
include_once ('dbCon.php');
class Message extends dbCon{
	private $id;
	private $fullname;
	private $email;
	private $subject;
	private $message;
	private $creationdate;

	public function __construct($name, $email, $subject, $message){
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

}
?>