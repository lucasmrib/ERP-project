<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");

	class TestController extends Controller{

		public function get_cnpj(){

			$cnpj = Curl::get_cnpj('15559597000186');
			echo json_encode($cnpj);
		}

	}