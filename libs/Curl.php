<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");

	class Curl{

		public static function get_cnpj($cnpj){

			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => 'https://receitaws.com.br/v1/cnpj/'.$cnpj,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 60,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'GET',
			));

			$cnpj = json_decode(curl_exec($curl), true);

			curl_close($curl);

			return $cnpj;
		}

	}