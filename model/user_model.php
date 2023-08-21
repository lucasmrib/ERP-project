<?php

	if ( ! defined ('ABSPATH') ) exit("Error 403");

	class User{

		public $db;
		public $controller;

		function __construct($db = false, $controller = null){

			$this->db = $db;
			$this->controller = $controller;
		}

		public function load_info($uid_usuario){
			$this->db->query("SELECT * FROM general.user WHERE uid_usuario = :uid_usuario");
			$this->db->bind(':uid_usuario', $uid_usuario);
			$this->db->execute();
		}
	}