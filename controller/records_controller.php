<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");

	class RecordsController extends Controller{

  		public function employees(){

			// $this->access_required = array();
			// $this->check_permissions();

			$employeeModel = $this->load_model('employee_model');
      		$employees = $employeeModel->employee_list();

			require ABSPATH . '/view/include/template-header.php';
			require ABSPATH . '/view/employee/employee_list.php';
			require ABSPATH . '/view/include/template-footer.php';

  		}

  		public function register_employee(){

			// $this->access_required = array();
			// $this->check_permissions();

			require ABSPATH . '/view/include/template-header.php';
			require ABSPATH . '/view/employee/register_employee.php';
			require ABSPATH . '/view/include/template-footer.php';

  		}

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

 	}