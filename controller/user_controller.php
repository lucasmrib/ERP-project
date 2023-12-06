<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");

	class UserController extends Controller{

		//Home page
		public function home(){

			$this->access_required = array('master');
			$this->check_permissions();

			require ABSPATH . '/view/include/template-header.php';
			require ABSPATH . '/view/user/home.php';
			require ABSPATH . '/view/include/template-footer.php';

  		}

  		//Profile data screen
		public function profile(){

			// $this->access_required = array();
			// $this->check_permissions();

			$employeeModel = $this->load_model('employee_model');

  			$uid_user = $this->parameters[2];
  			$employee = $employeeModel->display_employee($uid_user);

			require ABSPATH . '/view/include/template-header.php';
			require ABSPATH . '/view/user/profile.php';
			require ABSPATH . '/view/include/template-footer.php';

  		}

  		public function update_password(){

  			// $this->access_required = array();
			// $this->check_permissions();

  			$userModel = $this->load_model('user_model');

  			$user = $userModel->load_info($_POST['uid_user']);

  			if(!password_verify($_POST['old_password'], $user['password'])){
  				echo json_encode(Message::error('wrong-password'));
  				die();
  			}

  			if($_POST['new_password'] != $_POST['password_confirmation']){
  				echo json_encode(Message::error('password-confirmation'));
  				die();
  			}else{
  				$new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
  				try{
  					$userModel->update_password($_POST['uid_user'], $new_password);
  					echo json_encode(Message::success('update'));
				}catch (Exception $e){
					echo json_encode(Message::catch($e));
				}
  			}

  		}

 	}