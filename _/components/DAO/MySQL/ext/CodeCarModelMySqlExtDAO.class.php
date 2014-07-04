<?php
/*
 * Class that operate on table 'CODE_CAR_MODEL'. Database Mysql. Here you can write non standard sql queries @author: Bonneux Wim @date: 2014/02/15
 */
class CodeCarModelMySqlExtDAO extends BaseCodeMySqlDAO {
	/**
	 * Insert record to table
	 */
	public function insert($codeTable) {
		$sql = 'INSERT INTO $table (C_I_IDF_TECH, C_CARBRAND_IDF_TECH, T_I_DESCR_NDLS, T_I_DESCR_FRANS, T_I_DESCR_DUITS, D_I_BEGIN, D_I_END, S_I_CREATE_TECH) VALUES (?, ?, ?, ?,?, ?, ?, ?)';
		$sqlQuery = new SqlQuery ( $sql );
		
		$sqlQuery->setNumber ( $codeTable->id );
		$sqlQuery->setNumber ( $codeTable->carBrandId );
		$sqlQuery->setString ( $codeTable->descrNdls );
		$sqlQuery->setString ( $codeTable->descrFrans );
		$sqlQuery->setString ( $codeTable->descrDuits );
		$sqlQuery->set ( $codeTable->dateBegin );
		$sqlQuery->set ( $codeTable->dateEnd );
		$sqlQuery->set ( (new \DateTime ())->format ( 'Y-m-d H:i:s' ) );
		// $id = $this->executeInsert($sqlQuery);
		return $codeTable->$id;
	}
	
	/**
	 * Update record in table
	 */
	public function update($codeTable) {
		$sql = 'UPDATE $codeTable  SET C_CARBRAND_IDF_TECH = ?, T_I_DESCR_NDLS = ?, T_I_DESCR_FRANS = ?, T_I_DESCR_DUITS = ?,D_I_BEGIN = ?, D_I_END = ?, S_I_MOD_TECH = ? WHERE C_I_IDF_TECH = ?';
		$sqlQuery = new SqlQuery ( $sql );
		
		$sqlQuery->setNumber ( $codeTable->carBrandId );
		$sqlQuery->setString ( $codeTable->descrNdls );
		$sqlQuery->setString ( $codeTable->descrFrans );
		$sqlQuery->setString ( $codeTable->descrDuits );
		$sqlQuery->set ( $codeTable->dateBegin );
		$sqlQuery->set ( $codeTable->dateEnd );
		$sqlQuery->set ( (new \DateTime ())->format ( 'Y-m-d H:i:s' ) );
		$sqlQuery->setNumber ( $codeTable->id );
		return $this->executeUpdate ( $sqlQuery );
	}
	
	/**
	 * Read row
	 */
	public function readRow($row) {
		$codeTable = new BaseCodeValueObject ();
		$codeTable->id = $row ['C_I_IDF_TECH'];
		$codeTable->carBrandId = $row ['C_CARBRAND_IDF_TECH'];
		$codeTable->descrNdls = $row ['T_I_DESCR_NDLS'];
		$codeTable->descrFrans = $row ['T_I_DESCR_FRANS'];
		$codeTable->descrDuits = $row ['T_I_DESCR_DUITS'];
		$codeTable->dateBegin = $row ['D_I_BEGIN'];
		$codeTable->dateEnd = $row ['D_I_END'];
		$codeTable->created = $row ['S_I_CREATE_TECH'];
		$codeTable->modified = $row ['S_I_MOD_TECH'];
		
		return $codeTable;
	}
	
	
	/*
	 * get all models that are associated with the brand
	 * @return list
	 */
	public function getCarModelsByBrandId($brandId, $lang) {
		$sql = "SELECT C_I_IDF_TECH, ".$this->getDescrColumn($lang)." FROM code_car_model WHERE C_CARBRAND_IDF_TECH = ".$brandId." ORDER BY ".$this->getDescrColumn($lang);
		$sqlQuery = new SqlQuery($sql);
		$tab = $this->execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$description = new Description();
			$description->id = $tab[$i]["C_I_IDF_TECH"];
			$description->descr = $tab[$i][$this->getDescrColumn($lang)];
			$ret[$i] = $description;
		}
		return $ret;
	}
	
	
	
}
?>
