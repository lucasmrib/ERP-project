<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");
	
	class LoginModule{

		public $user_permissions_module;
		public $access_required_module;
		
		public function user_logged_module(){

			if ( ! $this->session_validation_module($_SESSION)) {
				return false;
			}

			return true;
		}

		protected function goto_login_module() {

			if ( defined( 'HOME_URI' ) ) {

				$login_uri  = HOME_URI . 'access/login';
				header('location: ' . $login_uri);

			}

		}

		protected function goto_page_module( $page , $parameters = array()) {

			if ( defined( 'HOME_URI' ) ) {
			
				$login_uri  = HOME_URI . $page ;
				header('location: ' . $login_uri);
			
			}
		
		}

		protected function check_permissions_module( ) {

			if ( ! $this->user_logged_module() ) {
				
				$this->goto_login_module();
				die();
				return false;

			}

			if ( ! $this->its_allowed_module( $this->access_required_module, $this->user_permissions_module ) ) {

				$this->goto_page_module( 'access/home' );
				die();
				return false;
				
			}			

			return true;

		}

		protected function its_allowed_module( $access_required_module, $user_permissions_module ){

			// Loop para verificar para verificar se o usuario possui o acesso necessario
			foreach ( $access_required_module as $required_module ) {
				
				// Loop para verificar tadas as permissões que o usuario possui
				if ( in_array( $required_module, $user_permissions_module ) ) {
					
					// Caso tenha dados match retorna true
					return true;

				}
				
			}

			// Caso não tenha dado match e retornado verdadeiro dentro do array, retorna false
			return false;

		}

		protected function session_validation_module($session = array()){
			
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

			if ( isset($session['module']) && is_array($session['module']) ) {

				$this->user_permissions_module = $session['module']; 
			
			}else{

				return false;
			}	

			return true;

		}
	}
?>