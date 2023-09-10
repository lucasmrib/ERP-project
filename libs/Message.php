<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");

	class Message{

		public static function success($tipSuccess){

		}

		public static function error($tipError){
			switch ($tipError) {

		 		case 'missing-info':
					return array('title' => 'Please fill in all the required fields!!', 'icone' => 'error', 'erro' => 1);
				break;

				case 'wrong-login':
					return array('title' => 'Invalid user!', 'icone' => 'error', 'erro' => 1);
				break;

				case 'wrong-password':
					return array('title' => 'Incorrect password, try again.', 'icone' => 'error', 'erro' => 1);
				break;
			}
		}

		public static function warning($tipWarning){

		}

	}