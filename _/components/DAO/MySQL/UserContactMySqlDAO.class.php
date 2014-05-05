<?php
/*
 * Class that operate on table 'IMG_ALBUM'. Database Mysql.
 *
 * @author: Bonneux Wim
 * @date: 2014/02/15
 */
require_once('BaseCommonMySqlDAO.class.php');

class UserContactMySqlDAO extends BaseCommonMySqlDAO {

	private $table = 'user_contact';
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
	public function insert($userContact){
		$sql = 'INSERT INTO user_contact (O_USER_IDF_TECH, T_I_NAME, T_I_FNAME,T_I_COMPANY_NAME, T_I_EMAIL, T_I_PHONE, T_I_GSM, T_I_STREET, T_I_HOUSENR, T_I_BUSNR, T_I_POSTALCODE, T_I_COMMUNITY, C_CODECOUNTRY_IDF_TECH, T_I_DETAILS, D_I_BEGIN, D_I_END, S_I_CREATE_TECH) VALUES (?, ?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($userContact->userId);
		$sqlQuery->set($userContact->name);
		$sqlQuery->set($userContact->firstName);
		$sqlQuery->set($userContact->companyName);
		$sqlQuery->set($userContact->email);
		$sqlQuery->set($userContact->phone);
		$sqlQuery->set($userContact->gsm);
		$sqlQuery->set($userContact->street);
		$sqlQuery->set($userContact->houseNumber);
		$sqlQuery->set($userContact->bus);
		$sqlQuery->set($userContact->postalCode);
		$sqlQuery->set($userContact->community);
		$sqlQuery->set($userContact->countryId);
		$sqlQuery->set($userContact->details);
		$sqlQuery->set($userContact->dateBegin);
		$sqlQuery->set($userContact->dateEnd);
		$sqlQuery->set((new \DateTime())->format('Y-m-d H:i:s'));
		$id = $this->executeInsert($sqlQuery);	
		$userContact->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 */
	public function update($userContact){
		$sql = 'UPDATE user_contact SET O_USER_IDF_TECH = ?, T_I_NAME = ?, T_I_FNAME = ?, T_I_COMPANY_NAME = ?, T_I_EMAIL = ?, T_I_PHONE = ?, T_I_GSM = ?, T_I_STREET = ?, T_I_HOUSENR = ?, T_I_BUSNR = ?, T_I_POSTALCODE = ?, T_I_COMMUNITY = ?, C_CODECOUNTRY_IDF_TECH = ?, T_I_DETAILS = ?, D_I_BEGIN = ?, D_I_END = ?, S_I_MOD_TECH WHERE O_I_IDF_TECH = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($userContact->userId);
		$sqlQuery->set($userContact->name);
		$sqlQuery->set($userContact->firstName);
		$sqlQuery->set($userContact->companyName);
		$sqlQuery->set($userContact->email);
		$sqlQuery->set($userContact->phone);
		$sqlQuery->set($userContact->gsm);
		$sqlQuery->set($userContact->street);
		$sqlQuery->set($userContact->houseNumber);
		$sqlQuery->set($userContact->bus);
		$sqlQuery->set($userContact->postalCode);
		$sqlQuery->set($userContact->community);
		$sqlQuery->set($userContact->countryId);
		$sqlQuery->set($userContact->dateBegin);
		$sqlQuery->set($userContact->dateEnd);
		$sqlQuery->set((new \DateTime())->format('Y-m-d H:i:s'));
		$sqlQuery->setNumber($userContact->id);
		return $this->executeUpdate($sqlQuery);
	}

	

	/**
	 * Read row
	 *
	 * @return AlbumMySql 
	 */
	public function readRow($row){
		$userContact = new UserContact();
		
		$userContact->id = $row['O_I_IDF_TECH'];
		$userContact->userId = $row['O_USER_IDF_TECH'];
		$userContact->name = $row['T_I_NAME'];
		$userContact->firstName = $row['T_I_FNAME'];
		$userContact->companyName = $row['T_I_COMPANY_NAME'];
		$userContact->email = $row['T_I_EMAIL'];
		$userContact->phone = $row['T_I_PHONE'];
		$userContact->gsm = $row['T_I_GSM'];
		$userContact->street = $row['T_I_STREET'];
		$userContact->houseNumber = $row['T_I_HOUSENR'];
		$userContact->bus = $row['T_I_bus'];
		$userContact->postalCode = $row['T_I_POSTALCODE'];
		$userContact->community = $row['T_I_COMMUNITY'];
		$userContact->countryId = $row['C_CODECOUNTRY_IDF_TECH'];
		$userContact->details = $row['T_I_DETAIL'];
		$userContact->dateBegin = $row['D_I_BEGIN'];
		$userContact->dateEnd = $row['D_I_END'];
		$userContact->created = $row['S_I_CREATE_TECH'];
		$userContact->modified = $row['S_I_MOD_TECH'];

		return $userContact;
	}
	
}
?>