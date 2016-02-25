<?php 
namespace Manager;

class ThemeManager extends \W\Manager\Manager
{
	public function findThemeAndCour(){
		$sql= "SELECT*FROM themes INNER JOIN cours ON themes.id= cours.themes_id";
		$sth->prepare($sql);
		$sql->execute();

		return $sth->fetchAll();


	}

}

?>