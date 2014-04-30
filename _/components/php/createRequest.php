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
$userReply->id = $userReplyDAO->insert($userReply).'<br>';

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
$userContact->id = $userContactDAO->insert($userContact);
//echo $userContactDAO->insert($userContact).'<br>';

//searchRequest
$searchRequest = new SearchRequest();
$searchRequestDAO = DAOFactory::getSearchRequestDAO();
$searchRequest->userReplyId = $userReply->id;
$searchRequest->userContactId = $userContact->id;
$searchRequest->active = 1;
$searchRequest->kilowatt = getSessionVar('searchRequestKiloWatt');
$searchRequest->created = getSessionVar('searchRequestChassis');
$searchRequest-> id =$searchRequestDAO->insert($searchRequest);
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
$searchArticle->id = $searchArticleDAO->insert($searchArticle);
if(!file_exists("./images/SearchRequests/SearchParts/".$searchArticle->id)){
	mkdir("./images/SearchRequests/SearchParts/".$searchArticle->id);
}
//copy the file
copy($_SESSION["File"],"./images/SearchRequests/SearchParts/".$searchArticle->id."/".$_SESSION["partFile"]);
$searchArticle->image = "./images/SearchRequests/SearchParts/".$searchArticle->id."/".$_SESSION["partFile"];
$searchArticleDAO->update($searchArticle);
//remove the session directory
//unlink($_SESSION["File"]);
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
//Model & Details
$pdf->printHeader($lang['HEADER_SEARCHREQUEST_DETAILS']);
$pdf->printLabelId($lang['SEARCHREQUEST_BRAND'], $searchRequestDetails->carBrandId, 'CODE_CAR_BRAND');
$pdf->printLabelId($lang['SEARCHREQUEST_MODEL'], $searchRequestDetails->carModelId, 'CODE_CAR_MODEL');
$pdf->printLabelId($lang['SEARCHREQUEST_BUILDYEAR'], $searchRequestDetails->buildYearId, 'CODE_CAR_BUILDYEAR');
$pdf->printLabelId($lang['SEARCHREQUEST_BUILDMONTH'], $searchRequestDetails->buildMonthId, 'CODE_CAR_BUILDMONTH');
$pdf->printLabelId($lang['SEARCHREQUEST_CAREXECUTION'], $searchRequestDetails->carExecutionId, 'CODE_CAR_EXECUTION');
$pdf->printLabelId($lang['SEARCHREQUEST_DOORNUMBER'], $searchRequestDetails->carDoorsId, 'CODE_CAR_DOORS');
$pdf->printLabelId($lang['SEARCHREQUEST_DRIVETYPE'], $searchRequestDetails->driveTypeId, 'CODE_CAR_DRIVETYPE');
$pdf->printLabelId($lang['SEARCHREQUEST_ENGINETYPE'], $searchRequestDetails->engineTypeId, 'CODE_CAR_ENGINETYPE');
$pdf->printLabelId($lang['SEARCHREQUEST_GEARBOX'], $searchRequestDetails->gearboxId, 'CODE_CAR_GEARBOX');
$pdf->printTextArea($lang['SEARCHREQUEST_DETAILS'], $searchRequestDetails->details);
//Onderdelen
$pdf->printHeader($lang['SEARCHPART_TITLE']);
$pdf->printLabelValue($lang['SEARCHPART_PART'], $searchArticle->articleNumber);
$pdf->printTextArea($lang['SEARCHPART_DETAIL'], $searchArticle->descr);
$pdf->printImage($searchArticle->image);
//Contactpersoon
$pdf->printHeader($lang['SEARCHCONTACT_TITLE']);
$pdf->printLabelValue($lang['SEARCHCONTACT_NAME'], $userContact->name);
$pdf->printLabelValue($lang['SEARCHCONTACT_FNAME'], $userContact->firstName);
$pdf->printLabelValue($lang['SEARCHCONTACT_TEL'], $userContact->phone);
//$pdf->printLabelValue($lang['SEARCHCONTACT_FAX'], $userContact->);
$pdf->printLabelValue($lang['SEARCHCONTACT_GSM'], $userContact->gsm);
$pdf->printLabelValue($lang['SEARCHCONTACT_EMAIL'], $userContact->email);
$pdf->printLabelValue($lang['SEARCHCONTACT_STREET'], $userContact->street);
$pdf->printLabelValue($lang['SEARCHCONTACT_HOUSENR'], $userContact->houseNumber);
$pdf->printLabelValue($lang['SEARCHCONTACT_HOUSEBUS'], $userContact->bus);
$pdf->printLabelValue($lang['SEARCHCONTACT_POSTALCODE'], $userContact->postalCodeId);
$pdf->printLabelValue($lang['SEARCHCONTACT_COUNTRY'], $userContact->countryId);
$pdf->printLabelValue($lang['SEARCHCONTACT_DETAILS'], $userContact->details);



//Geprefereerde Communicatie
$pdf->printHeader($lang['USERREPLY_TITLE']);
$pdf->printLabelYesNo($lang['USERREPLY_GSM'], $userReply->gsm);
$pdf->printLabelYesNo($lang['USERREPLY_PHONE'], $userReply->phone);
$pdf->printLabelYesNo($lang['USERREPLY_EMAIL'], $userReply->email);


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