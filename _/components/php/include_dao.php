<?php
	set_include_path('.;C:\xampp\htdocs\Zend\AutoOnderdelenRecup');
	
	
	//Table configuration
	require_once('_/components/DAO/tables.conf.php');
	//Core  Files
	require_once('_/components/DAO/core/ArrayList.class.php');
	require_once('_/components/DAO/DAOFactory.class.php');
	//Connection & SQL
	require_once('_/components/DAO/sql/Connection.class.php');
	require_once('_/components/DAO/sql/ConnectionFactory.class.php');
	require_once('_/components/DAO/sql/ConnectionProperty.class.php');
	require_once('_/components/DAO/sql/QueryExecutor.class.php');
	require_once('_/components/DAO/sql/Transaction.class.php');
	require_once('_/components/DAO/sql/SqlQuery.class.php');
	
	//include all DTO files
	require_once('_/components/DAO/DTO/BaseCodeValueObject.class.php');
	require_once('_/components/DAO/DTO/CodeCarModel.class.php');
	require_once('_/components/DAO/DTO/CodeCarSubCategory.class.php');
	require_once('_/components/DAO/DTO/SearchArticle.class.php');
	require_once('_/components/DAO/DTO/SearchRequest.class.php');
	require_once('_/components/DAO/DTO/SearchRequestDetails.class.php');
	require_once('_/components/DAO/DTO/User.class.php');
	require_once('_/components/DAO/DTO/UserContact.class.php');
	require_once('_/components/DAO/DTO/UserReply.class.php');
	
	//include all DAO files
	require_once('_/components/DAO/BaseCodeDAO.class.php');
	
	
 	//include all MySQL files
	require_once('_/components/DAO/MySQL/BaseCodeMySqlDAO.class.php');
	require_once('_/components/DAO/MySQL/ext/CodeCarModelMySqlExtDAO.class.php');
	require_once('_/components/DAO/MySQL/ext/CodeCarSubCategoryMySqlExtDAO.class.php');
	require_once('_/components/DAO/MySQL/ext/SearchArticleMySqlExtDAO.class.php');
	require_once('_/components/DAO/MySQL/ext/SearchRequestDetailsMySqlExtDAO.class.php');
	require_once('_/components/DAO/MySQL/ext/SearchRequestMySqlExtDAO.class.php');
	require_once('_/components/DAO/MySQL/ext/UserContactMySqlExtDAO.class.php');
	require_once('_/components/DAO/MySQL/ext/UserReplyMySqlExtDAO.class.php');
	
	
	
	
?>