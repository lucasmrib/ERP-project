<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");

	class Message{

		public static function success($tipSuccess){

		}

		public static function error($tipError){
			switch ($tipError) {

		 		case 'preencha-campos':
					return array('title' => 'Preencha os campos!!', 'icone' => 'error', 'erro' => 1);
				break;
			}
		}

		public static function warning($tipWarning){

		}

	}