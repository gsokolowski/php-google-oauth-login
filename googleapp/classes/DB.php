<?php

class DB {

	protected $mysqli;

	public function __construct() {

		$this->mysqli = new mysqli('localhost', 'root', 'root', 'google');
	}

	public function query($sql) {

		return $this->mysqli->query($sql);
	}
}