<?php 
//Creating the request

//step: create the userReply 			record
//step: create the userContact 			record
//step: create the searchRequest 		record
//step: create the searchParts 			record
//step: create the searchRequestDetails record


//userReply
$userReply = new UserReply();
$userReplyDAO = DAOFactory::getUserReplyDAO();
$userReply->address = getSessionVar('userReplyAddress');
$userReply->userId = getSessionVar('userId');
$userReply->gsm = getSessionVar('userReplyGSM');
$userReply->phone = getSessionVar('userReplyPhone');
$userReply->email = getSessionVar('userReplyEmail');
echo $userReplyDAO->insert($userReply).'<br>';

//userContact
$userContact = new UserContact();
$userContactDAO = DAOFactory::getUserContactDAO();
$userContact->name = getSessionVar('contact_name');
$userContact->firstName = getSessionVar('contact_fname');
$userContact->email = getSessionVar('contact_email');
$userContact->gsm = getSessionVar('contact_gsm');
$userContact->phone = getSessionVar('contact_tel');
//todo -> fax
$userContact->street = getSessionVar('contact_street');
$userContact->houseNumber = getSessionVar('contact_housenr');
$userContact->bus = getSessionVar('contact_housebus');
$userContact->postalCodeId = getSessionVar('contact_postalcode');
$userContact->details = getSessionVar('contact_details');
//todo -> community,state
$userContact->countryId = getSessionVar('contact_country');
echo $userContactDAO->insert($userContact).'<br>';

//searchRequest
$searchRequest = new SearchRequest();
$searchRequestDAO = DAOFactory::getSearchRequestDAO();
$searchRequest->userReplyId = $userReply->id;
$searchRequest->userContactId = $userContact->id;
$searchRequest->active = 1;
$searchRequest->kilowatt = getSessionVar('searchRequestKiloWatt');
$searchRequest->created = getSessionVar('searchRequestChassis');
$searchRequestDAO->insert($searchRequest);

//searchArticles/Parts
$searchArticle = new SearchArticle();
$searchArticleDAO = DAOFactory::getSearchArticleDAO();
$searchArticle->articleNumber = getSessionVar('partName');
$searchArticle->descr = getSessionVar('partDetails');
$searchArticle->categoryId = getSessionVar('partCategory');
$searchArticle->subCategoryId = getSessionVar('partSubCategory');
//insert & update the image field with the uploaded url
$searchArticleDAO->insert($searchArticle);
//upload photo to directory(images\SearchRequests\SearchParts\'id')
//step: create directory
//step: upload from session dir to searchpart dir
//step: delete session folder
//step: update searchPart with url of the saved folder 





function getSessionVar($sessionVar){
	if(isset($_SESSION[$sessionVar])){
		return $_SESSION[$sessionVar];
	}else{
		return null;
	}
}


?>