<?php 
namespace Manager;

class CourManager extends \W\Manager\Manager
{
	public function findThemeAndCour(){
		$sql= "SELECT*FROM themes INNER JOIN cours ON themes.id= cours.themes_id";
		$sth=$this->dbh->prepare($sql);
		$sth->execute();

		return $sth->fetchAll();


	}

}

?>