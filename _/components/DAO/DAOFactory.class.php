<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	
	/*
	 * @return CodeTable Type(CODE_CAR_BRAND)
	*/
	public static function getCodeTableDAO(){
		return new BaseCodeMySqlDAO();
	}
	
	/*
	 * @return CODE_CAR_MODEL
	*/
	public static function getCodeCarModelDAO(){
		return new CodeCarModelMySqlExtDAO();
	}
	
	/*
	 * @return CODE_CAR_SUBCATEGORY
	*/
	public static function getCodeCarSubCategoryDAO(){
		return new CodeCarSubCategoryMySqlExtDAO();
	}
	
	/*
	 * @return SEARCH_ARTICLE
	*/
	public static function getSearchArticleDAO(){
		return new SearchArticleMySqlExtDAO();
	}
	
	/*
	 * @return SEARCH_REQUEST
	*/
	public static function getSearchRequestDAO(){
		return new SearchRequestMySqlExtDAO();
	}
	
	/*
	 * @return SEARCH_REQUEST_DETAILS
	*/
	public static function getSearchRequestDetailsDAO(){
		return new SearchRequestDetailsMySqlExtDAO();
	}
	
	/*
	 * @return USER_CONTACT
	*/
	public static function getUserContactDAO(){
		return new UserContactMySqlExtDAO();
	}
	
	/*
	 * @return USER_REPLY
	*/
	public static function getUserReplyDAO(){
		return new UserReplyMySqlExtDAO();
	}
	
	

}
?>