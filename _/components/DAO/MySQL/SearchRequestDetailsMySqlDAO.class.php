<?php
/*
 * Class that operate on table 'IMG_ALBUM'. Database Mysql.
 *
 * @author: Bonneux Wim
 * @date: 2014/02/15
 */
require_once('BaseCommonMySqlDAO.class.php');

class SearchRequestDetailsMySqlDAO extends BaseCommonMySqlDAO {

	private $table = 'SEARCH_REQUEST_DETAILS';
	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AlbumMySql 
	 */
	public function load($id){
		return parent::loadBase($id,$this->table);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		return parent::queryAllBase($this->table);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		return parent::queryAllOrderByBase($orderColumn,$this->table);
	}
	
	/**
 	 * Delete record from table
 	 * @param Album primary key
 	 */
	public function delete($id){
		return parent::deleteBase($id,$this->table);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		return parent::cleanBase($this->table);
	}
	
	/**
 	 * Insert record to table
 	 */
	public function insert($searchRequestDetails){
		$sql = 'INSERT INTO SEARCH_REQUEST_DETAILS (O_SEARCHREQUEST_IDF_TECH, C_CARBRAND_IDF_TECH, C_CARMODEL_IDF_TECH, C_BUILDYEAR_IDF_TECH, C_BUILDMONTH_IDF_TECH, C_EXECUTION_IDF_TECH, C_DOORS_IDF_TECH, C_ENGINETYPE_IDF_TECH, C_DRIVETYPE_IDF_TECH, C_GEARBOX_IDF_TECH, T_I_DETAILS, S_I_CREATE_TECH) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($searchRequestDetails->searchRequestId);
		$sqlQuery->set($searchRequestDetails->carBrandId);
		$sqlQuery->set($searchRequestDetails->carModelId);
		$sqlQuery->set($searchRequestDetails->buildYearId);
		$sqlQuery->set($searchRequestDetails->buildMonthId);
		$sqlQuery->set($searchRequestDetails->carExecutionId);
		$sqlQuery->set($searchRequestDetails->carDoorsId);
		$sqlQuery->set($searchRequestDetails->engineTypeId);
		$sqlQuery->set($searchRequestDetails->driveTypeId);
		$sqlQuery->set($searchRequestDetails->gearboxId);
		$sqlQuery->set($searchRequestDetails->details);
		$sqlQuery->set((new \DateTime())->format('Y-m-d H:i:s'));
		return $this->executeInsert($sqlQuery);	
// 		$searchArticle->id = $id;
// 		return $id;
	}
	
	/**
 	 * Update record in table
 	 */
	public function update($searchRequestDetails){
		$sql = 'UPDATE SEARCH_REQUEST_DETAILS SET O_SEARCHREQUEST_IDF_TECH = ?, C_CARBRAND_IDF_TECH = ?, C_CARMODEL_IDF_TECH = ?, C_BUILDYEAR_IDF_TECH = ?, C_BUILDMONTH_IDF_TECH = ?, C_EXECUTION_IDF_TECH = ?, C_DOORS_IDF_TECH = ?, C_ENGINETYPE_IDF_TECH = ?, C_DRIVETYPE_IDF_TECH = ?, C_GEARBOX_IDF_TECH = ?, T_I_DETAILS = ?, S_I_MOD_TECH = ? WHERE O_I_IDF_TECH = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($searchRequestDetails->searchRequestId);
		$sqlQuery->setNumber($searchRequestDetails->carBrandId);
		$sqlQuery->setNumber($searchRequestDetails->carModelId);
		$sqlQuery->setNumber($searchRequestDetails->buildYearId);
		$sqlQuery->setNumber($searchRequestDetails->buildMonthId);
		$sqlQuery->setNumber($searchRequestDetails->carExecutionId);
		$sqlQuery->setNumber($searchRequestDetails->carDoorsId);
		$sqlQuery->setNumber($searchRequestDetails->engineTypeId);
		$sqlQuery->setNumber($searchRequestDetails->driveTypeId);
		$sqlQuery->setNumber($searchRequestDetails->gearboxId);
		$sqlQuery->setString($searchRequestDetails->details);
		$sqlQuery->set((new \DateTime())->format('Y-m-d H:i:s'));
		$sqlQuery->setNumber($searchRequestDetails->id);
		echo 'sqlQuery: '.$sqlQuery->txt;
		return $this->executeUpdate($sqlQuery);
	}

	

	/**
	 * Read row
	 *
	 * @return AlbumMySql 
	 */
	public function readRow($row){
		$searchRequestDetails = new SearchRequestDetails();
		
		$searchRequestDetails->id = $row['O_I_IDF_TECH'];
		$searchRequestDetails->searchRequestId = $row['O_SEARCHREQUEST_IDF_TECH'];
		$searchRequestDetails->carBrandId = $row['C_CARBRAND_IDF_TECH'];
		$searchRequestDetails->carModelId = $row['C_CARMODEL_IDF_TECH'];
		$searchRequestDetails->buildYearId = $row['C_BUILDYEAR_IDF_TECH'];
		$searchRequestDetails->buildMonthId = $row['C_BUILDMONTH_IDF_TECH'];
		$searchRequestDetails->carExecutionId = $row['C_EXECUTION_IDF_TECH'];
		$searchRequestDetails->carDoorsId = $row['C_DOORS_IDF_TECH'];
		$searchRequestDetails->engineTypeId = $row['C_ENGINETYPE_IDF_TECH'];
		$searchRequestDetails->driveTypeId = $row['C_DRIVETYPE_IDF_TECH'];
		$searchRequestDetails->gearBoxId = $row['C_GEARBOX_IDF_TECH'];
		$searchRequestDetails->details = $row['T_I_DETAILS'];

		return $searchArticle;
	}
	
}
?>