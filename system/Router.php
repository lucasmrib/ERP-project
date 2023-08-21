<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");
	
	class Router{

		private $controller;
		private $action;
		private $parameters;
		private $classController;
		private $fileController;
		private $not_found = '/view/errors/404.php';
		
		function __construct(){

			$this->get_url_data();

			if ( ! $this->classController && ! $this->fileController ) {

				require_once ABSPATH . '/controller/access_controller.php';

				$this->controller = new AccessController();
				$this->controller->login();

				return;

			}

			if ( ! file_exists( ABSPATH . '/controller/' . $this->fileController . '.php' ) ) {
				
				require_once ABSPATH . $this->not_found;

				return;

			}

			require_once ABSPATH . '/controller/' . $this->fileController . '.php';

			if ( ! class_exists($this->classController ) ) {
				
				require_once ABSPATH . $this->not_found;

				return;

			}

			$this->controller = new $this->classController( $this->parameters );

			if (method_exists( $this->controller, $this->action )) {

				$this->controller->{$this->action}( $this->parameters );

				return;

			}

			if ( ! $this->action && method_exists( $this->controller, 'access')) {
				$this->controller->access( $this->parameters );

				return;
			}

			require_once ABSPATH . $this->not_found;

			return; 

		}

		public function get_url_data(){
			
			if ( isset( $_GET['path'] ) ) {
				
				$path = $_GET['path'];

				$path = rtrim($path, '/');

				$path = filter_var($path, FILTER_SANITIZE_URL);

				$path = explode('/', $path);

				$this->controller = chk_array( $path, 0 );
				$this->classController  = ucfirst(chk_array( $path, 0 )) . 'Controller';
				$this->fileController .= chk_array( $path, 0 ) . '_controller';
				$this->action      = chk_array( $path, 1 );

				$this->parameters = array_values( $path );

			}
		}
	}
?>