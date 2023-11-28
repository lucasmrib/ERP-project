<?php

if ( ! defined ('ABSPATH') ) exit("Error 403");

class Employee{

	public $db;
	public $controller;

	function __construct($db = false, $controller = null){

		$this->db = $db;
		$this->controller = $controller;
	}

	public function employee_list(){
		$this->db->query("SELECT *, A.uid_user FROM user.user_credentials AS A
			LEFT JOIN user.user_permissions AS B
			ON A.uid_user = B.uid_user");
		return $this->db->resultset();
	}

	public function create_employee($uid_user, $name, $login, $password, $status, $cpf, $email, $phone, $access){
		$this->db->query("INSERT INTO user.user_credentials (uid_user, name, login, password, status, cpf, email, phone) VALUES (:uid_user, :name, :login, :password, :status, :cpf, :email, :phone)");
		$this->db->bind(':uid_user', $uid_user);
		$this->db->bind(':name', $name);
		$this->db->bind(':login', $login);
		$this->db->bind(':password', $password);
		$this->db->bind(':status', $status);
		$this->db->bind(':cpf', $cpf);
		$this->db->bind(':email', $email);
		$this->db->bind(':phone', $phone);
		$this->db->execute();

		$this->db->query("INSERT INTO user.user_permissions (uid_user, access) VALUES (:uid_user, :access)");
		$this->db->bind(':uid_user', $uid_user);
		$this->db->bind(':access', $access);
		$this->db->execute();
	}

	public function delete_employee($uid_user){
		$this->db->query("DELETE FROM user.user_credentials WHERE uid_user = :uid_user");
		$this->db->bind(':uid_user', $uid_user);
		$this->db->execute();

		$this->db->query("DELETE FROM user.user_permissions WHERE uid_user = :uid_user");
		$this->db->bind(':uid_user', $uid_user);
		$this->db->execute();
	}

	public function change_employee_status($uid_user){
		$this->db->query("UPDATE user.user_credentials SET status = NOT status WHERE uid_user = :uid_user");
		$this->db->bind(':uid_user', $uid_user);
		$this->db->execute();
	}

}