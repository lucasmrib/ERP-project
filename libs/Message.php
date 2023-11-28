<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");

	class Message{

		public static function success($tipSuccess){
			switch ($tipSuccess) {

				case 'creation':
					return array('title' => 'Record created successfully', 'icone' => 'success', 'error' => 0);
				break;

				case 'deletion':
					return array('title' => 'Record deleted successfully', 'icone' => 'success', 'error' => 0);
				break;

				case 'status':
					return array('title' => 'Status changed successfully', 'icone' => 'success', 'error' => 0);
				break;
			}
		}

		public static function error($tipError){
			switch ($tipError) {

		 		case 'missing-info':
					return array('title' => 'Please fill in all the required fields!!', 'icone' => 'error', 'error' => 1);
				break;

				case 'wrong-login':
					return array('title' => 'Invalid user!', 'icone' => 'error', 'error' => 1);
				break;

				case 'wrong-password':
					return array('title' => 'Incorrect password, try again.', 'icone' => 'error', 'error' => 1);
				break;
			}
		}

		public static function warning($tipWarning){

		}

		public static function catch($e){
		  	return $msg = array('title' => $e->getMessage(), 'icone' => 'error', 'error' => 1);		
		}

	}