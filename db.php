<?php
/**
 *
 */
class Database {

	public $host;
	public $username;
	public $password;
	public $dbname;
	public $conn;

	public function __construct($host, $user, $pass, $db) {

		$this->host = $host;
		$this->username = $user;
		$this->password = $pass;
		$this->dbname = $db;

		$this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
		if (!$this->conn) {
			echo "error";
			# code...
		}
	}

	public function select($table, $row = '*', $where = null) {

		$sql = "select $row from $table ";
		if ($where != null) {
			$sql .= " WHERE " . $where;
		}
		$query = mysqli_query($this->conn, $sql);

		return $query;
	}

	public function insert($table, $ad, $soyad, $img) {
		$sql = "INSERT INTO $table(title,text,img) VALUES('$ad','$soyad','$img')";
		$query = mysqli_query($this->conn, $sql);
		return $query;
	}

	public function update($table, $ad, $soyad, $img, $where) {
		$sql = " UPDATE `$table` SET `title`='$ad',`text`='$soyad',`img`='$img'  WHERE $where";
		$query = mysqli_query($this->conn, $sql);
		return $query;
	}
	public function delete($table, $where) {
		$sql = "DELETE FROM `xeberr` WHERE id=$where";
		$query = mysqli_query($this->conn, $sql);
		return $query;
	}
}
?>