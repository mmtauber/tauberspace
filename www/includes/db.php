<?php

class DatabaseManipulator {

private $link;

function __construct() {
	$this->link = mysql_connect('127.0.0.1:3306', 'test', 'test');
	if (!$this->link) {
	    die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("tauberspace_com");
}

public function __destruct() {
	mysql_close($this->link);
}

public function MyInsert($table, $cols, $vals) {

	$sql = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $cols, $vals);

	$this->ExecuteQuery($sql);
// mysql_query("INSERT INTO Customers(FirstName, LastName, Age) 
// VALUES('Jackie', 'Chan', 20)");

}

public function MyDelete($table, $id) {
	$sql = sprintf("DELETE FROM %s WHERE id = %s", $table, $id);
	
	$this->ExecuteQuery($sql);
}

public function MyEdit($table) {
}

public function MyFind ($table, $id) {
	$sql = sprintf("SELECT * FROM %s WHERE id = %s", $table, $id);
	$result = $this->ExecuteQuery($sql);
	return $result;
}

public function MyList($table) {
	$sql = sprintf("SELECT * FROM %s", $table);
	$result = $this->ExecuteQuery($sql);
	return $result;
}

public function test() {
	echo "test";
}

private function ExecuteQuery($sql) {
	$result = mysql_query($sql,$this->link);
	if (!$result) {
		die('Error: ' . mysql_error());
	}

	return $result;
}

}

?>

