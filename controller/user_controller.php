<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");

	class UserController extends Controller{

		public function home(){

			$this->access_required = array('master');
			$this->check_permissions();

			require ABSPATH . '/view/include/template-header.php';
			require ABSPATH . '/view/user/home.php';
			require ABSPATH . '/view/include/template-footer.php';

  		}

		public function profile(){

			// $this->access_required = array();
			// $this->check_permissions();

			require ABSPATH . '/view/include/template-header.php';
			require ABSPATH . '/view/user/profile.php';
			require ABSPATH . '/view/include/template-footer.php';

  		}

 	}