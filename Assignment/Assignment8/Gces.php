<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<?php 
echo "<h1>Gandaki College of Engineering & Science</h1>";

$gcesStaffs = [
	"academic" => [
		[
			"name" => "Aanya Fozer",
			"address" => "Okahama",
			"phones" => ["9856011111","987654321"],
			"subjects" => ["Web Technology", "C++"]
		],
		[
			"name" => "Matth Gonzal",
			"address" => "Bhaktapur",
			"phones" => ["9856022222","983451267"],
			"subjects" => ["Photoshop", "JAVA"]
		],
		[
			"name" => "Nivan Gurung",
			"address" => "Pokhara",
			"phones" => ["9856033333",],
			"subjects" => ["Social", "Psycology"]
		]
	],
	"non-academic" => [
		[
			"name" => "Tarus Pradhan",
			"address" => "Kathmandu",
			"phones" => ["9856044444"],
		],
		[
			"name" => "Ansuman Banton",
			"address" => "London",
			"phones" => ["9856055555"],
		],
	]
];

//Table START
echo '<table border="3" cellspacing="10" cellpadding="10">';
//Table Header
echo '<tr><th>Type</th><th>Name</th><th>Address</th><th>Phone</th><th>Subjects</th></tr>';
foreach($gcesStaffs as $staffType => $staffDetails){
 
	foreach($staffDetails as $key => $staff ){
		//TR START
	  echo "<tr bgcolor = 'greenyellow'>";
      echo "<td bgcolor = 'white' >$staffType</td>";
      echo "<td bgcolor = 'pink'>$staff[name]</td>";
      echo "<td bgcolor = 'lightblue'>$staff[address]</td>";
	  echo "<td>";
    foreach ($staff["phones"] as $phone){
      echo "$phone ";
    }
    echo "</td>";
    echo "<td>";
	
    if(array_key_exists('subjects', $staff)){
		
      foreach ($staff["subjects"] as $subject){
        echo "$subject, ";
      }
    }
    echo "</td>";
	echo "</tr>";
	//TR END 
  }
}
echo "</table>";
//Table END

?>
	
</body>
</html>