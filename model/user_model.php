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
		$this->db->query("SELECT * FROM ".DB_NAME.".user_credentials WHERE login = :login");
		$this->db->bind(':login', $login);
		return $this->db->single();
	}

	public function select_access($uid_user){
		$this->db->query("SELECT access FROM ".DB_NAME.".user_permissions WHERE uid_user = :uid_user");
		$this->db->bind(':uid_user', $uid_user);
		return $this->db->single();
	}

	public function save_login_token($uid_user, $login_token){
		$this->db->query("UPDATE ".DB_NAME.".user_credentials SET login_token = :login_token WHERE uid_user = :uid_user");
		$this->db->bind(':login_token', $login_token);
		$this->db->bind(':uid_user', $uid_user);
		return $this->db->execute();
	}

}