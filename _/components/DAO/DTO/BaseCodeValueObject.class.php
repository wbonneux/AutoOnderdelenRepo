<?php 

/**

* Object represents base for codetables CODE_...

*

* @author: Bonneux Wim

* @date: 2014/04/04

*/

require_once("BaseValueObject.class.php");

class BaseCodeValueObject extends BaseValueObject{
// 	T_I_DESCR_NDLS
	var $descrNdls;
// 	T_I_DESCR_FRANS
	var $descrFrans;
// 	T_I_DESCR_DUITS
	var $descrDuits;
// 	D_I_BEGIN
	var $dateBegin;
// 	D_I_END
	var $dateEnd;	
}
 ?>