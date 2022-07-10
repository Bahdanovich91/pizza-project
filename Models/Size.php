<?php 


class Size {

	private $dbconnect;

	public function __construct($dbconnect)
	{
		$this->dbconnect = $dbconnect;
	}

	public function getAll()
	{
		$sql = 'SELECT * FROM sizes';
		$result = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
		return $data;
	}
}