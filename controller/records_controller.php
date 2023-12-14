<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");

	class RecordsController extends Controller{

		//Employee list screen
  		public function employees(){

			// $this->access_required = array();
			// $this->check_permissions();

			$employeeModel = $this->load_model('employee_model');
      		$employees = $employeeModel->employee_list();

			require ABSPATH . '/view/include/template-header.php';
			require ABSPATH . '/view/employee/employee_list.php';
			require ABSPATH . '/view/include/template-footer.php';

  		}

  		//Employee registration screen
  		public function register_employee(){

			// $this->access_required = array();
			// $this->check_permissions();

			require ABSPATH . '/view/include/template-header.php';
			require ABSPATH . '/view/employee/register_employee.php';
			require ABSPATH . '/view/include/template-footer.php';

  		}

  		//Adds employee on database
  		public function create_employee(){

  			// $this->access_required = array();
			// $this->check_permissions();

  			$employeeModel = $this->load_model('employee_model');

  			$uid_user = bin2hex(random_bytes(5));
  			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  			$_POST['status'] ?? $_POST['status'] = 0;
  			$_POST['access'] ?? $_POST['access'] = "user";
  			$status = intval($_POST['status']);

  			try {
				$employeeModel->create_employee($uid_user, $_POST['name'], $_POST['login'], $password, $status, $_POST['cpf'], $_POST['email'], $_POST['phone'], $_POST['access']);
				echo json_encode(Message::success('creation'));
			}catch (Exception $e){
				echo json_encode(Message::catch($e));
			}
  		}

  		//Deletes employee from database
  		public function delete_employee(){

  			// $this->access_required = array();
			// $this->check_permissions();

  			$employeeModel = $this->load_model('employee_model');

  			$uid_user = $this->parameters[2];

  			try {
				$employeeModel->delete_employee($uid_user);
				echo json_encode(Message::success('deletion'));
			}catch (Exception $e){
				echo json_encode(Message::catch($e));
			}
  		}

  		//Changes the status of the employee access. (Active -> Inactive / Inactive -> Active)
  		public function change_employee_status(){

  			// $this->access_required = array();
			// $this->check_permissions();

  			$employeeModel = $this->load_model('employee_model');

  			$uid_user = $this->parameters[2];

  			try {
				$employeeModel->change_employee_status($uid_user);
				echo json_encode(Message::success('status'));
			}catch (Exception $e){
				echo json_encode(Message::catch($e));
			}
  		}

  		//Display data from an employee and profile screen
  		public function display_employee(){

  			// $this->access_required = array();
			// $this->check_permissions();

  			$employeeModel = $this->load_model('employee_model');

  			$uid_user = $this->parameters[2];
  			$employee = $employeeModel->display_employee($uid_user);

  			require ABSPATH . '/view/include/template-header.php';
			require ABSPATH . '/view/employee/display_employee.php';
			require ABSPATH . '/view/include/template-footer.php';
  			
  		}

  		public function update_credentials(){

  			// $this->access_required = array();
			// $this->check_permissions();

  			$employeeModel = $this->load_model('employee_model');

  			$_POST['status'] ?? $_POST['status'] = 0;
  			$status = intval($_POST['status']);

  			try{
				$employeeModel->update_credentials($_POST['uid_user'], $_POST['name'], $_POST['login'], $status, $_POST['cpf'], $_POST['email'], $_POST['phone']);
				echo json_encode(Message::success('update'));
			}catch (Exception $e){
				echo json_encode(Message::catch($e));
			}

  		}

  		public function update_access(){

  			// $this->access_required = array();
			// $this->check_permissions();

  			$employeeModel = $this->load_model('employee_model');

  			$_POST['access'] ?? $_POST['access'] = "user";

  			try{
				$employeeModel->update_access($_POST['uid_user'], $_POST['access']);
				echo json_encode(Message::success('update'));
			}catch (Exception $e){
				echo json_encode(Message::catch($e));
			}

  		}

  		public function update_password(){

  			// $this->access_required = array();
			// $this->check_permissions();

  			$employeeModel = $this->load_model('employee_model');

  			if($_POST['new_password'] != $_POST['password_confirmation']){
  				echo json_encode(Message::error('password-confirmation'));
  				die();
  			}else{
  				$new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
  				try{
  					$employeeModel->update_password($_POST['uid_user'], $new_password);
  					echo json_encode(Message::success('update'));
				}catch (Exception $e){
					echo json_encode(Message::catch($e));
				}
  			}

  		}

  		//Employee list screen
  		public function customers(){

			// $this->access_required = array();
			// $this->check_permissions();

			$customerModel = $this->load_model('customer_model');
      		$customers = $customerModel->customer_list();

			require ABSPATH . '/view/include/template-header.php';
			require ABSPATH . '/view/customer/customer_list.php';
			require ABSPATH . '/view/include/template-footer.php';

  		}

 	}