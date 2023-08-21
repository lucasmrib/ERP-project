<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");
	
	class UserLogin extends LoginModule{

		public $logged_time;
		public $current_time;
		public $user_name;
		public $user_permissions;
		public $access_required;

		private $logged_token;
		
		public function user_logged(){

			if ( ! $this->session_validation($_SESSION)) {
				return false;
			}

			if ($_SESSION['token_login'] != $this->logged_token) {

				return false;
			}

			$this->current_time = time();

			if ( ($this->current_time - $this->logged_time) > 15*6000 ) {

				foreach ($_SESSION['access'] as $value) {
					if ($value != 'sup') {
						return false;
					}
				}
			
			}

			$_SESSION['token_time'] = $this->current_time;

			return true;

		}

		protected function logout( $redirect = true ) {

			session_unset();
			
			if ( $redirect === true ) {
				$this->goto_login();
			}

		}

		protected function goto_login() {

			if ( defined( 'HOME_URI' ) ) {

				$login_uri  = HOME_URI . 'access/login';
				header('location: ' . $login_uri);

			}

		}

		protected function goto_page( $page , $parameters = array()) {

			if ( defined( 'HOME_URI' ) ) {
			
				$login_uri  = HOME_URI . $page ;
				header('location: ' . $login_uri);
			
			}
		
		}

		protected function check_permissions( ) {

			if ( ! $this->user_logged() ) {
				
				$this->goto_login();
				die();
				return false;

			}

			if ( ! $this->its_allowed( $this->access_required, $this->user_permissions ) ) {

				$this->goto_page( 'usuario/home' );
				die();
				return false;
				
			}			

			return true;

		}

		protected function its_allowed( $access_required, $user_permissions ){

			// Loop para verificar para verificar se o usuario possui o acesso necessario
			foreach ( $access_required as $required ) {
				
				// Loop para verificar tadas as permissões que o usuario possui
				if ( in_array( $required, $user_permissions ) ) {
					
					// Caso tenha dados match retorna true
					return true;

				}
				
			}

			// Caso não tenha dado match e retornado verdadeiro dentro do array, retorna false
			return false;

		}

		protected function session_validation($session = array()){

			$this->db->query("SELECT token_login FROM usuario WHERE (login = :login) "); 
            $this->db->bind(':login', $_SESSION['login']);
            $row = $this->db->single();

            if($row['token_login'] != $_SESSION['token_login']){
                session_unset();
                return false;
            }
			
			if (empty($session)) {

				return false;
			}

			if ( ! isset( $session['uid_usuario'] ) || empty( $session['uid_usuario'] ) ){

				return false;
			}

			if ( ! isset( $session['uid_empresa'] ) || empty( $session['uid_empresa'] ) ){

				return false;
			}

			if ( ! isset( $session['login'] ) || empty( $session['login'] ) ){

				return false;
			}


			$this->user_name = $session['nome'];

			$this->logged_token = $session['token_login'];

			if ( isset($session['access']) && is_array($session['access']) ) {

				$this->user_permissions = $session['access']; 
			
			}else{

				return false;
			}

			if ( isset($session['token_time']) && is_numeric($session['token_time']) ) {

				$this->logged_time = $session['token_time']; 
			
			}else{

				return false;
			}	

			return true;

		}
	}
?>