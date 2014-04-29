<?php 
//echo 'start create';
//Creating the request

//step: create the userReply 			record
//step: create the userContact 			record
//step: create the searchRequest 		record
//step: create the searchParts 			record
//step: create the searchRequestDetails record
//step: create the pdf
//step: mail the pdf to the client & the firm


//userReply
$userReply = new UserReply();
$userReplyDAO = DAOFactory::getUserReplyDAO();
$userReply->address = getSessionVar('userReplyAddress');
$userReply->userId = getSessionVar('userId');
$userReply->gsm = getSessionVar('userReplyGSM');
$userReply->phone = getSessionVar('userReplyPhone');
$userReply->email = getSessionVar('userReplyEmail');
//echo $userReplyDAO->insert($userReply).'<br>';

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
//echo $userContactDAO->insert($userContact).'<br>';

//searchRequest
$searchRequest = new SearchRequest();
$searchRequestDAO = DAOFactory::getSearchRequestDAO();
$searchRequest->userReplyId = $userReply->id;
$searchRequest->userContactId = $userContact->id;
$searchRequest->active = 1;
$searchRequest->kilowatt = getSessionVar('searchRequestKiloWatt');
$searchRequest->created = getSessionVar('searchRequestChassis');
$searchRequestDAO->insert($searchRequest);
// echo '<br>';
// echo 'searchRequestid: '.$searchRequest->id.'<br>';

//searchArticles/Parts
$searchArticle = new SearchArticle();
$searchArticleDAO = DAOFactory::getSearchArticleDAO();
$searchArticle->articleNumber = getSessionVar('partName');
$searchArticle->descr = getSessionVar('partDetails');
$searchArticle->categoryId = getSessionVar('partCategory');
$searchArticle->subCategoryId = getSessionVar('partSubCategory');
$searchArticle->searchRequestId = $searchRequest->id;
//insert & update the image field with the uploaded url
$searchArticleDAO->insert($searchArticle);
//upload photo to directory(images\SearchRequests\SearchParts\'id')
//step: create directory
//step: upload from session dir to searchpart dir
//step: delete session folder
//step: update searchPart with url of the saved folder 


//searchRequestDetails
$searchRequestDetails = new SearchRequestDetails();
$searchRequestDetailsDAO = DAOFactory::getSearchRequestDetailsDAO();
$searchRequestDetails->carBrandId = getSessionVar('brand');
$searchRequestDetails->carModelId = getSessionVar('model');
$searchRequestDetails->buildYearId = getSessionVar('buildYear');
$searchRequestDetails->buildMonthId = getSessionVar('buildMonth');
$searchRequestDetails->carExecutionId = getSessionVar('carexecution');
$searchRequestDetails->carDoorsId = getSessionVar('cardoors');
$searchRequestDetails->gearboxId = getSessionVar('cargearbox');
$searchRequestDetails->driveTypeId = getSessionVar('cardrivetype');
$searchRequestDetails->carenginetype = getSessionVar('carenginetype');
$searchRequestDetails->details = getSessionVar('details');
$searchRequestDetails->searchRequestId = $searchRequest->id;
$searchRequestDetailsDAO->insert($searchRequestDetails);

//after all inserts we can create the pdf
include_once './_/components/php/pdf/myPDF.class.php';
$pdf = new PDF();
$pdf->fillObjects($searchRequest,$searchRequestDetails,$userContact,$userReply,$searchArticle);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->printHeader('myTitle');
$pdf->SetFont('Times','',12);

//save the pdf in a directory SearchRequestPdf/'SearchRequest_'.$searchRequest->id.'.pdf');
	//step: test for existence & create file
$pdf->Output('SearchRequestPDF/SearchRequest_'.$searchRequest->id.'.pdf','F');


function getSessionVar($sessionVar){
	if(isset($_SESSION[$sessionVar])){
		return $_SESSION[$sessionVar];
	}else{
		return null;
	}
}



?>