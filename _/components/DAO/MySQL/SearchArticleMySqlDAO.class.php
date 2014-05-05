<?php
/*
 * Class that operate on table 'IMG_ALBUM'. Database Mysql.
 *
 * @author: Bonneux Wim
 * @date: 2014/02/15
 */
require_once('BaseCommonMySqlDAO.class.php');

class SearchArticleMySqlDAO extends BaseCommonMySqlDAO{

	private $table = 'search_article';
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
	public function insert($searchArticle){
		$sql = 'INSERT INTO search_article (O_SEARCHREQUEST_IDF_TECH, O_CARCATEGORY_IDF_TECH, O_CARSUBCATEGORY_IDF_TECH, T_I_DESCRIPTION, T_I_IMAGE, T_I_ARTICLENUMBER, S_I_CREATE_TECH) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($searchArticle->searchRequestId);
		$sqlQuery->set($searchArticle->categoryId);
		$sqlQuery->set($searchArticle->subCategoryId);
		$sqlQuery->setString($searchArticle->descr);
		$sqlQuery->setString($searchArticle->image);
		$sqlQuery->setString($searchArticle->articleNumber);
		$sqlQuery->set((new \DateTime())->format('Y-m-d H:i:s'));
		$id = $this->executeInsert($sqlQuery);	
		$searchArticle->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AlbumMySql Album
 	 */
	public function update($searchArticle){
		$sql = 'UPDATE search_article SET O_SEARCHREQUEST_IDF_TECH = ?, O_CARCATEGORY_IDF_TECH = ?, O_CARSUBCATEGORY_IDF_TECH = ?, T_I_DESCRIPTION = ?, T_I_IMAGE = ?, T_I_ARTICLENUMBER = ?, S_I_MOD_TECH = ? WHERE O_I_IDF_TECH = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($searchArticle->searchRequestId);
		$sqlQuery->set($searchArticle->categoryId);
		$sqlQuery->set($searchArticle->subCategoryId);
		$sqlQuery->setString($searchArticle->descr);
		$sqlQuery->setString($searchArticle->image);
		$sqlQuery->setString($searchArticle->articleNumber);
		$sqlQuery->set((new \DateTime())->format('Y-m-d H:i:s'));
		$sqlQuery->setNumber($searchArticle->id);
		return $this->executeUpdate($sqlQuery);
	}

	

	/**
	 * Read row
	 *
	 * @return AlbumMySql 
	 */
	public function readRow($row){
		$searchArticle = new SearchArticle();
		
		$searchArticle->id = $row['O_I_IDF_TECH'];
		$searchArticle->categoryId = $row['C_CATEGORY_IDF_TECH'];
		$searchArticle->subCategoryId = $row['C_SUBCATEGORY_IDF_TECH'];
		$searchArticle->descr = $row['T_I_DESCRIPTION'];
		$searchArticle->image = $row['T_I_IMAGE'];
		$searchArticle->articleNumber = $row['T_I_ARTICLENUMBER'];
		$searchArticle->created = $row['S_I_CREATE_TECH'];
		$searchArticle->modified = $row['S_I_MOD_TECH'];

		return $searchArticle;
	}
	
}
?>