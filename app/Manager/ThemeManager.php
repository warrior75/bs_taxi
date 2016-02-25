<?php 
namespace Manager;

class ThemeManager extends \W\Manager\Manager
{
	public function findThemeAndCour(){
		$sql= "SELECT themes.name as theme_name, cours.* FROM themes INNER JOIN cours ON themes.id= cours.themes_id";
		$sth->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
	}

}

?>