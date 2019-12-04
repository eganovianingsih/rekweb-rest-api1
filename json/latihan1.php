	<?php 

	// $mahasiswa = [
	// 	[
	// 		"nama" => "ega novianingsih",
	// 		"nrp" => " 173040036",
	// 		"email" => "eganovia07@mail.unpas.ac.id"
			
	// 	],

	// 	[
	// 		"nama" => "reza",
	// 		"nrp" => " 173040113",
	// 		"email" => "zapram123@mail.unpas.ac.id"
		
	// 	]
	// ];

	$dbh = new PDO('mysql:host=localhost;dbname=phpmvc','root','');
	$db = $dbh->prepare('SELECT * FROM mahasiswa');
	$db->execute();
	$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

	$data = json_encode($mahasiswa);
	echo $data;


 ?>