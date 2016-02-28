<?php 
namespace Manager;

class MessageManager extends \W\Manager\Manager
{
	public function showMessage(){
		$sql="'SELECT  FROM messages ORDER BY id DESC LIMIT 0, 10'"; ;
		$messages=$this->dbh->prepare($sql);
		$messages->execute();
		return $messages->fetchAll();
	}

}

?>