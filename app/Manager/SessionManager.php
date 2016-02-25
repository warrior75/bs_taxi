<?php 
namespace Manager;

class SessionManager extends \W\Manager\Manager
{
	public function findByUserIdAndCourID($id,$courId){
		if (!is_numeric($id)){
			return false;
		}

		$sql = "SELECT * FROM " . $this->table . " WHERE users_id = :id AND cours_id = :courId LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id);
		$sth->bindValue(":courId", $courId);
		$sth->execute();

		return $sth->fetch();
	}

}

?>
