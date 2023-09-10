<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");

	class RecordsController extends Controller{

  		public function employees(){

			// $this->access_required = array();
			// $this->check_permissions();

			$userModel = $this->load_model('user_model');
      		$employees = $userModel->employee_list();

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

 	}