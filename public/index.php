<?php

	require_once "../vendor/autoload.php";

	use Medoo\Medoo;

	echo "Hello world!";

	$database = new Medoo([
		'database_type' => 'sqlite',
		'database_file' => '../storage/database.db'
	]);

	dump($database);
	// $array = [1, "apple", 2, "foo", "bar"];
	// var_dump($array);

	// dump($array);

?>
