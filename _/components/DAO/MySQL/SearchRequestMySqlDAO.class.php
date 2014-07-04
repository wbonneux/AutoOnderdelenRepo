<?php
/*
 * Class that operate on table 'IMG_ALBUM'. Database Mysql.
 *
 * @author: Bonneux Wim
 * @date: 2014/02/15
 */
require_once('BaseCommonMySqlDAO.class.php');

class SearchRequestMySqlDAO extends BaseCommonMySqlDAO {

	private $table = 'search_request';
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
 	 *
 	 * @param AlbumMySql Album
 	 */
	public function insert($searchRequest){
		$sql = 'INSERT INTO search_request (O_USERCONTACT_IDF_TECH, O_USERREPLY_IDF_TECH, O_SEARCHREQUESTTYPE_IDF_TECH, L_I_ACTIVE, S_I_CREATE_TECH) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($searchRequest->userContactId);
		$sqlQuery->set($searchRequest->userReplyId);
		$sqlQuery->setString($searchRequest->searchRequestType);
		$sqlQuery->set($searchRequest->active);
		$sqlQuery->set((new \DateTime())->format('Y-m-d H:i:s'));
		$id = $this->executeInsert($sqlQuery);	
		$searchRequest->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AlbumMySql Album
 	 */
	public function update($searchRequest){
		$sql = 'UPDATE search_request SET O_USERCONTACT_IDF_TECH = ?, O_USERREPLY_IDF_TECH = ?, O_SEARCHREQUESTTYPE_IDF_TECH, L_I_ACTIVE = ?, S_I_MOD_TECH = ? WHERE O_I_IDF_TECH = ?) VALUES ( ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($searchRequest->userContactId);
		$sqlQuery->set($searchRequest->userReplyId);
		$sqlQuery->setString($searchRequest->searchRequestType);
		$sqlQuery->set($searchRequest->active);
		$sqlQuery->set((new \DateTime())->format('Y-m-d H:i:s'));
		$sqlQuery->setNumber($searchRequest->id);
		return $this->executeUpdate($sqlQuery);
	}

	

	/**
	 * Read row
	 *
	 * @return AlbumMySql 
	 */
	public function readRow($row){
		$searchRequest = new SearchRequest();
		
		$searchRequest->id = $row['O_I_IDF_TECH'];
		$searchRequest->userContactId = $row['O_USERCONTACT_IDF_TECH'];
		$searchRequest->userReplyId = $row['O_USERREPLY_IDF_TECH'];
		$searchRequest->chassis = $row['O_SEARCHREQUESTTYPE_IDF_TECH'];
		$searchRequest->active = $row['L_I_ACTIVE'];
		$searchRequest->created = $row['S_I_CREATE_TECH'];
		$searchRequest->modified = $row['S_I_MOD_TECH'];

		return $searchRequest;
	}
	
}
?>