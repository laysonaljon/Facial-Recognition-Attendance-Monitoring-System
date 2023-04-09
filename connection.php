<?php
	DEFINE("DB_SERVER", "localhost");
	DEFINE("DB_USERNAME", "root");
	DEFINE("DB_PASSWORD", "");
	DEFINE("DB_NAME", "attendance");

	function openConnection(){
		$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

		if($con === false)
			die("ERROR: Could not Connect " . mysqli_connect_error());
		
		return $con;
	}

	function closeConnection($con){
		mysqli_close($con);
	}

	function getRecord($con, $strSql){
		$arrRec = [];
		$i = 0;

		if ($rs = mysqli_query($con, $strSql)) {
			if(mysqli_num_rows($rs) > 0) {
				while($rec = mysqli_fetch_array($rs)){
					foreach ($rec as $key => $value) {
						$arrRec[$i][$key] = $value;
					}
					$i++;
				}
			}
			mysqli_free_result($rs);
		}
		else
			die("ERROR: Could not Execute your request!");

		return $arrRec;
		}

?>