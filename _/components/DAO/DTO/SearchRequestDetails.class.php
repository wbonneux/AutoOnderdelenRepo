<?php

	/**

	 * Object represents table 'SEARCH_REQUEST_DETAILS'

	 *

     	 * @author: Bonneux Wim

     	 * @date: 2014/04/04

	 */
	class SearchRequestDetails extends BaseValueObject{
// 		O_SEARCHREQUEST_IDF_TECH
	  	var $searchRequestId;
// 		C_CARBBRAND_IDF_TECH
	  	var $carBrandId;
// 		C_CARMODEL_IDF_TECH
 		var $carModelId;
//		C_BUILDYEAR_IDF_TECH
		var $buildYearId;
//		C_BUILDMONTH_IDF_TECH
		var $buildMonthId;
//		C_EXECUTION_IDF_TECH
		var $carExecutionId;
//		C_DOORS_IDF_TECH
		var $carDoorsId;
//		C_ENGINETYPE_IDF_TECH
		var $engineTypeId;
//		C_DRIVETYPE_IDF_TECH
		var $driveTypeId;
//		C_GEARBOX_IDF_TECH
		var $gearboxId;
//		T_I_CC
		var $cc;
//		T_I_KILOWATT
		var $kilowatt;
//		T_I_CHASSIS
		var $chassis;
//		T_I_CODE
		var $code;
//		O_PARTSTYPE_IDF_TECH
		var $partsType;		
//		T_I_DETAILS
		var $details;
	}
	

?>