<?php 
namespace Manager;

class CourManager extends \W\Manager\Manager
{
	public function findThemeAndCours(){
		$sql= "SELECT themes.name as theme_name, cours.id, cours.title, cours.text_body FROM themes INNER JOIN cours ON themes.id= cours.themes_id";
		$sth=$this->dbh->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
	}

}

?>