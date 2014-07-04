<?php 

/** 
 * Class BaseCodeMySqlDAO
 *
 * @author : Bonneux Wim <wbonneux@gmail.com>
 * @date: 2013/11/28
 */

require_once("BaseMySqlDAO.class.php");
require_once('./_/components/DAO/DTO/BaseCodeValueObject.class.php');

class BaseCodeMySqlDAO extends BaseMySqlDAO implements BaseCodeDAO{

	/**
	 * Get Domain language by primry key
	 *
	 * @param String $id primary key
	 * @Return language 
	 */
	public function loadBase($id,$table){
		$sql = 'SELECT * FROM '.$table.' WHERE C_I_IDF_TECH = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAllBase($table){
		$sql = 'SELECT * FROM '.$table;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderByBase($orderColumn,$table){
		$sql = 'SELECT * FROM '.$table.' ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all descriptions by language from table ordered by field(by language)
	 */
	public function getAllDescrByLang($table,$lang){
// 		$sql = 'SELECT C_I_IDF_TECH, '.$this->getDescrColumn($lang).' FROM '.$table.' ORDER BY '.$this->getDescrColumn($lang);
		$sql = 'SELECT * FROM '.$table.' ORDER BY '.$this->getDescrColumn($lang);
		$sqlQuery = new SqlQuery($sql);
		$tab = $this->execute($sqlQuery);
		$tab = $this->getActiveRecords($tab);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$description = new Description();
			$description->id = $tab[$i]["C_I_IDF_TECH"];
			$description->descr = $tab[$i][$this->getDescrColumn($lang)];
			$ret[$i] = $description;
		}
		return $ret;
	}
	
	/**
	 * Get all descriptions by language from table ordered by field(by language)
	 */
	public function getAllDescrByLangOrdered($table,$lang, $order){
// 		$sql = 'SELECT C_I_IDF_TECH, '.$this->getDescrColumn($lang).' FROM '.$table.' ORDER BY '.$this->getDescrColumn($lang).' '.$order;
		$sql = 'SELECT * FROM '.$table.' ORDER BY '.$this->getDescrColumn($lang).' '.$order;
		$sqlQuery = new SqlQuery($sql);
		$tab = $this->execute($sqlQuery);
		$tab = $this->getActiveRecords($tab);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$description = new Description();
			$description->id = $tab[$i]["C_I_IDF_TECH"];
			$description->descr = $tab[$i][$this->getDescrColumn($lang)];
			$ret[$i] = $description;
		}
		return $ret;
	}
	
	/**
	 * Get all descriptions by language from table ordered by id
	 */
	public function getAllDescrByLangAndIdOrdered($table,$lang, $order){
// 		$sql = 'SELECT C_I_IDF_TECH, '.$this->getDescrColumn($lang).' FROM '.$table.' ORDER BY C_I_IDF_TECH '.$order;
		$sql = 'SELECT * FROM '.$table.' ORDER BY C_I_IDF_TECH '.$order;
		$sqlQuery = new SqlQuery($sql);
		$tab = $this->execute($sqlQuery);
		$tab = $this->getActiveRecords($tab);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$description = new Description();
			$description->id = $tab[$i]["C_I_IDF_TECH"];
			$description->descr = $tab[$i][$this->getDescrColumn($lang)];
			$ret[$i] = $description;
		}
		return $ret;
	}
	
	/**
	 * Get description of a record from table by id & language
	 * @Param $orderColumn column name
	 */
	public function getDescrByLang($id,$table,$lang){
		
		$sql = 'SELECT '.$this->getDescrColumn($lang) .' FROM '.$table.' WHERE C_I_IDF_TECH = '.$id;
		$sqlQuery = new SqlQuery($sql);
		return $this->querySingleResult($sqlQuery);
	}
	
	/**
	 * Get the active records from the original result of the query
	 * D_I_BEGIN, D_I_END == null => active
	 * ((D_I_BEGIN == null, =< CURRENT_DATE) & (D_I_END == null, >= CURRENT_DATE)) => active
	 * other => passive
	 * @param Result of Query $tab
	 */
	private function getActiveRecords($tab)
	{
		$rtab = array();	
		for($i=0;$i<count($tab);$i++){
			if( (($tab[$i]["D_I_BEGIN"] === null) || ($tab[$i]["D_I_BEGIN"] <= date("Y-m-d"))) & (($tab[$i]["D_I_END"] === null) || ($tab[$i]["D_I_END"] >= date("Y-m-d"))) ){
				$rtab[$i] = $tab[$i];
			}
			
// 			$description->id = $tab[$i]["C_I_IDF_TECH"];
// 			$description->descr = $tab[$i][$this->getDescrColumn($lang)];
// 			$ret[$i] = $description;
		}
		return $rtab;
	}
	
	/**
 	 * Delete record from table
 	 * @param language primary key
 	 */
	public function deleteBase($id,$table){
		$sql = 'DELETE FROM '.$table.' WHERE C_I_IDF_TECH = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}

	

	/**
	 * Delete all rows in table
	 */
	public function cleanBase($table){
		$sql = 'DELETE FROM '.$table;
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}
	
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AlbumMySql Album
 	 */
	public function insert($codeTable){
		$sql = 'INSERT INTO $table (C_I_IDF_TECH, T_I_DESCR_NDLS, T_I_DESCR_FRANS, T_I_DESCR_DUITS, D_I_BEGIN, D_I_END, S_I_CREATE_TECH) VALUES (?, ?, ?,?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($codeTable->id);
		$sqlQuery->setString($codeTable->descrNdls);
		$sqlQuery->setString($codeTable->descrFrans);
		$sqlQuery->setString($codeTable->descrDuits);
		$sqlQuery->set($codeTable->dateBegin);
		$sqlQuery->set($codeTable->dateEnd);
		//$sqlQuery->set((new DateTime())->format('Y-m-d H:i:s'));
// 		$id = $this->executeInsert($sqlQuery);	
		return $codeTable->$id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AlbumMySql Album
 	 */
	public function update($codeTable){
		$sql = 'UPDATE $codeTable  SET T_I_DESCR_NDLS = ?, T_I_DESCR_FRANS = ?, T_I_DESCR_DUITS = ?,D_I_BEGIN = ?, D_I_END = ?, S_I_MOD_TECH = ? WHERE C_I_IDF_TECH = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setString($codeTable->descrNdls);
		$sqlQuery->setString($codeTable->descrFrans);
		$sqlQuery->setString($codeTable->descrDuits);
		$sqlQuery->set($codeTable->dateBegin);
		$sqlQuery->set($codeTable->dateEnd);
		$sqlQuery->set((new \DateTime())->format('Y-m-d H:i:s'));
		$sqlQuery->setNumber($codeTable->id);
		return $this->executeUpdate($sqlQuery);
	}

	

	/**
	 * Read row
	 *
	 * @return AlbumMySql 
	 */
	public function readRow($row){
		$codeTable = new BaseCodeValueObject();
		$codeTable->id = $row['C_I_IDF_TECH'];
		$codeTable->descrNdls = $row['T_I_DESCR_NDLS'];
		$codeTable->descrFrans = $row['T_I_DESCR_FRANS'];
		$codeTable->descrDuits = $row['T_I_DESCR_DUITS'];
		$codeTable->dateBegin = $row['D_I_BEGIN'];
		$codeTable->dateEnd = $row['D_I_END'];
		$codeTable->created = $row['S_I_CREATE_TECH'];
		$codeTable->modified = $row['S_I_MOD_TECH'];

		return $codeTable;
	}
	
}

/**
 * Non standard transfer object
 */
class Description{
	var $id;
	var $descr;
}

 ?>