<?php

	/**

	 * Object represents table 'USER_USER'

	 *

     	 * @author: Bonneux Wim

     	 * @date: 2014/04/04

	 */
	class User extends BaseValueObject{
//	T_I_USERID
	var $userName;
//	T_I_PASSWORD_HASH
	var $passwordHash;
//	L_I_ACTIVE
	var $active;
//	T_I_ACTIVATION_HASH
	var $activationHash;
//	T_I_RESETPASSWORD_HASH
	var $resetPasswordHash;
//	S_I_RESETPASSWORD_RESET
	var $resetPasswordTimeStamp;
//	T_I_REMEMBERME_TOKEN
	var $rememberMeToken;
//	N_I_LOGIN_FAILED
	var $loginFailed;
//	S_I_LOGIN_FAILED
	var $loginFailedTimeStamp;
//	S_I_REGISTRATION
	var $registrationTimeStamp;
//	T_I_REGISTRATION_IP
	var $registrationIp;
//	D_I_BEGIN
	var $dateBegin;
//	D_I_END
	var $dateEnd;
	}
	

?>