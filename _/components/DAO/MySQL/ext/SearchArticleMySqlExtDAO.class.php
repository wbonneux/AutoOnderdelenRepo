<?php
/*
 * Class that operate on table 'SEARCH_ARTICLE'. Database Mysql. Here you can write non standard sql queries @author: Bonneux Wim @date: 2014/02/15
*/
require_once './_/components/DAO/MySQL/SearchArticleMySqlDAO.class.php';

class SearchArticleMySqlExtDAO extends SearchArticleMySqlDAO {
	public function getSearchArticlesBySearchRequestId($searchRequestId){
		$sql = "SELECT * FROM SEARCH_ARTICLE WHERE O_SEARCHREQUEST_IDF_TECH = ?";
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($searchRequestId);
		return $this->getList($sqlQuery);
	}
}