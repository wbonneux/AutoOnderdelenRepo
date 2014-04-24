<?php
/*
 * Class that operate on table 'IMG_ALBUM'. Database Mysql.
 *
 * @author: Bonneux Wim
 * @date: 2014/02/15
 */
require_once('BaseCommonMySqlDAO.class.php');

class UserReplyMySqlDAO extends BaseCommonMySqlDAO {

	private $table = 'USER_REPLY';
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
	public function insert($userReply){
		$sql = 'INSERT INTO USER_REPLY (O_USER_IDF_TECH, L_I_EMAIL, L_I_PHONE, L_I_GSM, L_I_ADDRESS, D_I_BEGIN, D_I_END, S_I_CREATE_TECH) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($userReply->userId);
		$sqlQuery->set($userReply->email);
		$sqlQuery->set($userReply->phone);
		$sqlQuery->set($userReply->gsm);
		$sqlQuery->set($userReply->address);
		$sqlQuery->set($userReply->dateBegin);
		$sqlQuery->set($userReply->dateEnd);
		$sqlQuery->set((new \DateTime())->format('Y-m-d H:i:s'));
		$id = $this->executeInsert($sqlQuery);	
		$userReply->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 */
	public function update($userReply){
		$sql = 'UPDATE USER_REPLY SET O_USER_IDF_TECH = ?, L_I_EMAIL = ?, L_I_PHONE = ?, L_I_GSM = ?, L_I_STREET = ?, D_I_BEGIN = ?, D_I_END = ? WHERE O_I_IDF_TECH = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($userReply->userId);
		$sqlQuery->set($userReply->email);
		$sqlQuery->set($userReply->phone);
		$sqlQuery->set($userReply->gsm);
		$sqlQuery->set($userReply->address);
		$sqlQuery->set($userReply->dateBegin);
		$sqlQuery->set($userReply->dateEnd);
		$sqlQuery->set((new \DateTime())->format('Y-m-d H:i:s'));
		$sqlQuery->setNumber($userReply->id);
		return $this->executeUpdate($sqlQuery);
	}

	

	/**
	 * Read row
	 *
	 * @return AlbumMySql 
	 */
	public function readRow($row){
		$userReply = new UserReply();
		
		$userReply->id = $row['O_I_IDF_TECH'];
		$userReply->userId = $row['O_USER_IDF_TECH'];
		$userReply->email = $row['L_I_EMAIL'];
		$userReply->phone = $row['L_I_PHONE'];
		$userReply->gsm = $row['L_I_GSM'];
		$userReply->address = $row['L_I_ADDRESS'];
		$userReply->dateBegin = $row['D_I_BEGIN'];
		$userReply->dateEnd = $row['D_I_END'];
		$userReply->created = $row['S_I_CREATE_TECH'];
		$userReply->modified = $row['S_I_MOD_TECH'];

		return $userReply;
	}
	
}
?>