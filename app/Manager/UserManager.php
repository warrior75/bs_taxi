<?php 
namespace Manager;

class UserManager extends \W\Manager\Manager
{
	
	public function findEleve(){
		$sql= "SELECT * FROM users WHERE role = 'etudiant'";
		$sth=$this->dbh->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
	}

	public function findFormateur(){
		$sql= "SELECT * FROM users WHERE role = 'formateur'";
		$sth=$this->dbh->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
	}

}

?>