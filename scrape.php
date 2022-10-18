<?php

	$htmlContent = file_get_contents("https://docs.google.com/spreadsheets/d/e/2PACX-1vSMWQDJWG5SBueRgsOzjvYZUsco5pUxvspZZO0zMWaNTsJx7sEiOfLBlgOSLhY1KOLYlwimDK9jyCik/pubhtml?gid=0&single=true");
		
	$DOM = new DOMDocument();
	$DOM->loadHTML($htmlContent);
	
	$Header = $DOM->getElementsByTagName('th');
	$Detail = $DOM->getElementsByTagName('td');

    //#Get header name of the table
	foreach($Header as $NodeHeader) 
	{
		$aDataTableHeaderHTML[] = trim($NodeHeader->textContent);
	}
	//print_r($aDataTableHeaderHTML); die();

	//#Get row data/detail table without header name as key
	$i = 0;
	$j = 0;
	$a;
	foreach($Detail as $sNodeDetail) 
	{
		$aDataTableDetailHTML[$j][] = trim($sNodeDetail->textContent);


		$i = $i + 1;
		$j = $i % count($aDataTableHeaderHTML) == 0 ? $j + 1 : $j;
	}


	

	$stock = "";
	$price = "";
	$volume = "";


	
	//TATA
	print_r($aDataTableDetailHTML[0][3]);
	print(" ");
	print_r($aDataTableDetailHTML[0][4]);
	print(" ");
	print_r($aDataTableDetailHTML[0][5]);
	print(" ");

	$stock = $aDataTableDetailHTML[0][3];
	$price = $aDataTableDetailHTML[0][4];
	$volume = $aDataTableDetailHTML[0][5];

	realUpdate($stock, $price, $volume);
	



	//HDFC
	print_r($aDataTableDetailHTML[0][6]);
	print(" ");
	print_r($aDataTableDetailHTML[0][7]);
	print(" ");
	print_r($aDataTableDetailHTML[0][8]);
	print(" ");

	$stock = $aDataTableDetailHTML[0][6];
	$price = $aDataTableDetailHTML[0][7];
	$volume = $aDataTableDetailHTML[0][8];

	realUpdate($stock, $price, $volume);


	//Reliance
	print_r($aDataTableDetailHTML[0][9]);
	print(" ");
	print_r($aDataTableDetailHTML[0][10]);
	print(" ");
	print_r($aDataTableDetailHTML[0][11]);
	print(" ");

	$stock = $aDataTableDetailHTML[0][9];
	$price = $aDataTableDetailHTML[0][10];
	$volume = $aDataTableDetailHTML[0][11];

	realUpdate($stock, $price, $volume);



	//ITC
	print_r($aDataTableDetailHTML[0][12]);
	print(" ");
	print_r($aDataTableDetailHTML[0][13]);
	print(" ");
	print_r($aDataTableDetailHTML[0][14]);
	print(" ");

	$stock = $aDataTableDetailHTML[0][12];
	$price = $aDataTableDetailHTML[0][13];
	$volume = $aDataTableDetailHTML[0][14];

	realUpdate($stock, $price, $volume);


	//Kotak
	print_r($aDataTableDetailHTML[0][15]);
	print(" ");
	print_r($aDataTableDetailHTML[0][16]);
	print(" ");
	print_r($aDataTableDetailHTML[1][0]);
	print(" ");

	$stock = $aDataTableDetailHTML[0][15];
	$price = $aDataTableDetailHTML[0][16];
	$volume = $aDataTableDetailHTML[1][0];

	realUpdate($stock, $price, $volume);

	//Infosys
	print_r($aDataTableDetailHTML[1][1]);
	print(" ");
	print_r($aDataTableDetailHTML[1][2]);
	print(" ");
	print_r($aDataTableDetailHTML[1][3]);
	print(" ");

	$stock = $aDataTableDetailHTML[1][1];
	$price = $aDataTableDetailHTML[1][2];
	$volume = $aDataTableDetailHTML[1][3];

	realUpdate($stock, $price, $volume);

	//TCS
	print_r($aDataTableDetailHTML[1][4]);
	print(" ");
	print_r($aDataTableDetailHTML[1][5]);
	print(" ");
	print_r($aDataTableDetailHTML[1][6]);
	print(" ");

	$stock = $aDataTableDetailHTML[1][4];
	$price = $aDataTableDetailHTML[1][5];
	$volume = $aDataTableDetailHTML[1][6];

	realUpdate($stock, $price, $volume);


	//Adani
	print_r($aDataTableDetailHTML[1][7]);
	print(" ");
	print_r($aDataTableDetailHTML[1][8]);
	print(" ");
	print_r($aDataTableDetailHTML[1][9]);
	print(" ");

	$stock = $aDataTableDetailHTML[1][7];
	$price = $aDataTableDetailHTML[1][8];
	$volume = $aDataTableDetailHTML[1][9];

	realUpdate($stock, $price, $volume);


	//AsianPaints
	print_r($aDataTableDetailHTML[1][10]);
	print(" ");
	print_r($aDataTableDetailHTML[1][11]);
	print(" ");
	print_r($aDataTableDetailHTML[1][12]);
	print(" ");

	$stock = $aDataTableDetailHTML[1][10];
	$price = $aDataTableDetailHTML[1][11];
	$volume = $aDataTableDetailHTML[1][12];

	realUpdate($stock, $price, $volume);


	//Airtel
	print_r($aDataTableDetailHTML[1][13]);
	print(" ");
	print_r($aDataTableDetailHTML[1][14]);
	print(" ");
	print_r($aDataTableDetailHTML[1][15]);
	print(" ");

	$stock = $aDataTableDetailHTML[1][13];
	$price = $aDataTableDetailHTML[1][14];
	$volume = $aDataTableDetailHTML[1][15];

	realUpdate($stock, $price, $volume);


	//DrReddy
	print_r($aDataTableDetailHTML[1][16]);
	print(" ");
	print_r($aDataTableDetailHTML[2][0]);
	print(" ");
	print_r($aDataTableDetailHTML[2][1]);
	print(" ");

	$stock = $aDataTableDetailHTML[1][16];
	$price = $aDataTableDetailHTML[2][0];
	$volume = $aDataTableDetailHTML[2][1];

	realUpdate($stock, $price, $volume);


	//BurgerKing
	print_r($aDataTableDetailHTML[2][2]);
	print(" ");
	print_r($aDataTableDetailHTML[2][3]);
	print(" ");
	print_r($aDataTableDetailHTML[2][4]);
	print(" ");

	$stock = $aDataTableDetailHTML[2][2];
	$price = $aDataTableDetailHTML[2][3];
	$volume = $aDataTableDetailHTML[2][4];

	realUpdate($stock, $price, $volume);






	print("\n");

	die();


	function realUpdate($stock, $price, $volume)
	{
		$link = mysqli_connect("localhost", "root", "", "log_in_info");
		
		$stock = '"' . $stock;
		$stock = $stock . '"';
		$price = '"' . $price;
		$price = $price . '"';
		$volume = '"' . $volume;
		$volume = $volume . '"';

		// $stock = $aDataTableDetailHTML[0][3];
		// $price = $aDataTableDetailHTML[0][4];
		// $volume = $aDataTableDetailHTML[0][5];

		// Check connection
		if ($link === false) {
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
	
		$sql = "UPDATE `stock_info` SET`stock_price`= $price, `remaining_stocks`= $volume WHERE `company_name` = $stock";

		if (mysqli_query($link, $sql)) {
		} else {
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

		mysqli_close($link);
	}

?>