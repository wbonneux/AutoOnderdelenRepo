<?php
/**
 * handles the user login/logout/session
 * @author Bonneux Wim
 */
class Login {
	public function __construct() {
		// create/read session
		session_start ();
		if (isset ( $_GET ["logout"] )) {
			$this->doLogout ();
		}
	}
	
	/**
	 * Perform the logout, resetting the session
	 */
	public function doLogout()
	{
		$this->deleteRememberMeCookie();
	
		$_SESSION = array();
		session_destroy();
	
		$this->user_is_logged_in = false;
		$this->messages[] = MESSAGE_LOGGED_OUT;
	}
	
	/**
	 * Delete all data needed for remember me cookie connection on client and server side
	 */
	private function deleteRememberMeCookie()
	{
		// if database connection opened
		if ($this->databaseConnection()) {
			// Reset rememberme token
			$sth = $this->db_connection->prepare("UPDATE users SET user_rememberme_token = NULL WHERE user_id = :user_id");
			$sth->execute(array(':user_id' => $_SESSION['user_id']));
		}
	
		// set the rememberme-cookie to ten years ago (3600sec * 365 days * 10).
		// that's obivously the best practice to kill a cookie via php
		// @see http://stackoverflow.com/a/686166/1114320
		setcookie('rememberme', false, time() - (3600 * 3650), '/', COOKIE_DOMAIN);
	}
}

?>