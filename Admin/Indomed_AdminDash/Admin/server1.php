<?php		
	$keyword = strval($_POST['query']);
	$search_param = "{$keyword}%";
	$conn =new mysqli('localhost', 'root', '' , 'eagleeyes');
	//$conn = mysqli_connect('localhost:3306', 'eagleeye_EEA', 'Enter@123', 'eagleeye_dmo');

	$sql = $conn->prepare("SELECT * FROM master_team_leads WHERE Name LIKE ?");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			//$countryResult[] = array ('label' => $row['name'].', '.$row['city'],'value' => $row['name'],);
			$countryResult[] =array($row["Name"].' , '.$row["City"].' , '.$row["Team_Name"]) ;
			//$countryResult[] = value =>$row['username'];
			//$countryResult[] = array("value"=>$row['username'],"label"=>$row['username']);
		//.','.$row["state"],  $row['username'],
		}
		
		echo json_encode($countryResult);
	}
	$conn->close();
?>

