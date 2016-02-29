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

	   // compter le nombre de cours validé par étudiant
        public function nbCourParEtudiantValide() {
            $sql= "SELECT COUNT(*) as nbCourParEtudiantValide FROM sessions INNER JOIN users WHERE status = 'validate' AND users_id = users.id ";
            $sth=$this->dbh->prepare($sql);
            $sth->execute();
            return $sth->fetchAll();
        }
        
        // compter le nombre de cours validé par étudiant
        public function nbCourParEtudiantProgress() {
            $sql= "SELECT COUNT(*) as nbCourParEtudiantProgress FROM sessions INNER JOIN users WHERE status = 'in_progress' AND users_id = users.id ";
            $sth=$this->dbh->prepare($sql);
            $sth->execute();
            return $sth->fetchAll();
        }

}

?>
