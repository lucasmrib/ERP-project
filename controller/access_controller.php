<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");

	class AccessController extends Controller{

  		// Login page
  		public function login(){

  			if (isset($_SESSION['uid_user'])) {
				header("location: ".HOME_URI."user/home");
				die();
			}

			require ABSPATH . '/view/include/template-header.php';
			require ABSPATH . '/view/user/login.php';
			require ABSPATH . '/view/include/template-footer.php';

  		}

  		// Logout funcion
  		public function logoff(){

  			session_unset();
 			session_destroy();

  			header("location: ".HOME_URI."access/login");
			die();

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

      			}else if(!$user['status']){
      				echo json_encode(Message::error('wrong-login'));
      				die();

      			}else if(!password_verify($_POST['password'], $user['password'])){
      				echo json_encode(Message::error('wrong-password'));
      				die();

      			}else{
      				$_SESSION['uid_user'] = $user['uid_user'];
      				$_SESSION['name'] = $user['name'];
      				$_SESSION['login'] = $user['login'];
      				$_SESSION['access'] = array($userModel->select_access($_SESSION['uid_user'])['access']);
      				$_SESSION['login_token'] = md5('seg'.bin2hex(random_bytes(5)));
      				$_SESSION['token_time'] = time();

      				try {
      					$userModel->save_login_token($_SESSION['uid_user'], $_SESSION['login_token']);
      				}catch (Exception $e){
      					echo json_encode(Message::catch($e));
      				}

      				echo json_encode(array('error' => 0));
      			}
      		}
  		}

  		//Test function to show session data
  		public function session(){
  			echo json_encode($_SESSION);
  			die();
  		}

 	}