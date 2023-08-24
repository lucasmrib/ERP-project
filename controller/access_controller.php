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

  		// Login page
  		public function login(){

  			if (isset($_SESSION['uid_user'])) {
				header("location: ".HOME_URI."access/home");
				die();
			}

			require ABSPATH . '/view/include/template-header.php';
			require ABSPATH . '/view/user/login.php';
			require ABSPATH . '/view/include/template-footer.php';

  		}

  		// Password validation and access to home
  		public function access(){

  			if (empty($_POST['login']) || empty($_POST['password']))  {
 				echo json_encode(Message::error('missing-info'));
      			die();

      		}else{

      			$userModel = $this->load_model('user_model');
      			$user = $userModel->load_info($_POST['login']);

      			if(empty($user)){
      				echo json_encode(Message::error('wrong-login'));
      				die();

      			}else if(!password_verify($_POST['password'], $user['password'])){
      				echo json_encode(Message::error('wrong-password'));
      				die();

      			}else{
      				$_SESSION['uid_user'] = $user['uid_user'];
      				$_SESSION['name'] = $user['name'];
      				$_SESSION['login'] = $user['login'];
      				echo json_encode(array('error' => 0));
      			}
      		}
  		}

  		public function session(){
  			echo json_encode($_SESSION);
  			die();
  		}

 	}