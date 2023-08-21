<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");
	
	class Controller extends UserLogin{
		
		public $db;
		public $title;
		public $parameters = array();

		function __construct($parameters = array() ){

			$this->db = new Database();
			$this->module = new LoginModule();

			$this->parameters = $parameters;

		}

		public function load_model( $model_name = false ){
			
			if (! $model_name ) return;

			$model_name =  strtolower( $model_name );

			$model_path = ABSPATH . '/model/' . $model_name . '.php';

			if ( file_exists( $model_path ) ) {
				
				require_once $model_path;

				$model_name = explode( '_', $model_name );

				$model_name = $model_name[0];

				$model_name = preg_replace( '/[^a-zA-Z0-9]/is', '', $model_name );

				if ( class_exists( $model_name ) ) {

					return new $model_name( $this->db, $this );
				}

				return;
			}
		}
	}

?>