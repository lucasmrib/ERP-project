<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");

	class AccessController extends Controller{

		public function home(){

			// $this->access_required = array();
			// $this->check_permissions();

			require ABSPATH . '/view/include/template-header.php';
			require ABSPATH . '/view/user/home.php';
			require ABSPATH . '/view/include/template-footer.php';

  		}


  		public function login(){

  			// if (isset($_SESSION['uid_usuario'])) {
			// 	$userModel = $this->load_model('usuario_model');
 			// 	$status = $userModel->load_info($_SESSION['uid_usuario']);
			// }

			require ABSPATH . '/view/include/template-header.php';
			require ABSPATH . '/view/user/login.php';
			require ABSPATH . '/view/include/template-footer.php';

  		}

  		public function access(){

  			$usuarioModel = $this->load_model('usuario_model');

  			if (empty($_POST['login']) || empty($_POST['senha']))  {
 				echo json_encode(Mensagem::error('preencha-campos'));
      			die();
      		}else if(isset($_POST['login']) && isset($_POST['senha'])) {
      			
      		}

  		}

 	}