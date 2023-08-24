<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");

	class User{

		public $db;
		public $controller;

		function __construct($db = false, $controller = null){

			$this->db = $db;
			$this->controller = $controller;
		}

		public function load_info($login){
			$this->db->query("SELECT * FROM user.user_credentials WHERE login = :login");
			$this->db->bind(':login', $login);
			return $this->db->single();
		}

	}