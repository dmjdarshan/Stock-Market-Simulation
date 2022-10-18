<html>

<head>
	<link rel="stylesheet" href="styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
	<title>Admin</title>
	<script defer src="scrip1.js"></script>
	<style>
		.onerow {
    		display: inline-block;
		}

		.name{
			font-size: larger;
		}
	</style>
	
	
</head>

<body>

	<div>
		<header>
			<div class="inner">
				<navo>
					<li><span> Admin</span></li>
				</navo>
			</div>
		</header>

		<h2>Change Stock Price</h2>

	
		<?php

		// function sName($par){
		// 	$stock = $par;
		

		$errorMessage = $message = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {


			if (empty($_POST['stockPrice'] || empty($_POST['noStocks']))) {

				$errorMessage = "*Fill all the fields";
				$varPrice = "";
				$varStock = "";
				$varNoStock = "";

				$message = "";
			} else {
							
				$varStock = $_POST['submit'];
				$varPrice = $_POST['stockPrice'];
				$varNoStock = $_POST['noStocks'];

				$errorMessage = "";
				$message = "Stock Price of " . $varStock;
				$message = $message . "is set to Rs.";
				$message = $message . $varPrice;



				update($varStock, $varPrice, $varNoStock);
			}
		}
	


		function update($varStock, $varPrice, $varNoStock)
		{
			$link = mysqli_connect("localhost", "root", "", "log_in_info");

			$varPrice = '"' . $varPrice;
			$varPrice = $varPrice . '"';
			$varStock = '"' . $varStock;
			$varStock = $varStock . '"';
			$varNoStock = '"' . $varNoStock;
			$varNoStock = $varNoStock . '"';


			// Check connection
			if ($link === false) {
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}

			// Attempt update query execution
			$sql = "UPDATE `stock_info` SET`stock_price`= $varPrice, `remaining_stocks`= $varNoStock WHERE `company_name` = $varStock";
			// $sql = "UPDATE `stock_info` SET WHERE `company_name` = $varStock";
			if (mysqli_query($link, $sql)) {
			} else {
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}

			// Close connection
			mysqli_close($link);
		}

		function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		?>

<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {


			if (empty($_POST['news'])) {

				$errorMessageNews = "*Fill all the fields";
				$News = "";
				$messageNews = "";
			} else {

				$News = $_POST['news'];

				$errorMessage = "";
				$messageNews = "News Updated Successfully";




				updateNews($News);
			}
		}

		function updateNews($News)
		{
			$link1 = mysqli_connect("localhost", "root", "", "log_in_info");

			$News = '"' . $News;
			$News = $News . '"';

			// Check connection
			if ($link1 === false) {
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}

			// Attempt update query execution
			$sql1 = "INSERT INTO `news`(`news`) VALUES ($News)";
			if (mysqli_query($link1, $sql1)) {
			} else {
				echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link1);
			}

			// Close connection
			mysqli_close($link1);
		}


		?>




		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<!-- <select name="stock" value="<?php echo $varStock; ?>">
				<option value=Tata> Tata </option>
				<option value=HDFC> HDFC </option>
				<option value=Reliance> Reliance </option>
				<option value=ITC> ITC </option>
				<option value=Kotal> Kotak </option>
				<option value=Infosys> Infosys </option>
				<option value=TCS> TCS</option>
				<option value=Adani> Adani </option>
				<option value=Asian_Paints> Asian Paints </option>
				<option value=Airtel> Airtel </option>
				<option value=Dr_Reddy> Dr Reddy </option>
				<option value=Burger_King> Burger King </option>
			</select> -->
			<br><br>

			<div class = "onerow">
				&emsp;
				<span class = "name"><u><b>Tata</b></u></span>
				<span>:   </span>&emsp;&emsp;
				Remaining Stocks: <input type="text" name="noStocks">&emsp;&emsp;
				Stock Price: <input type="text" name="stockPrice">&emsp;&emsp;
				<input type="submit" name="submit" value="Tata">
				
			</div>
			</form>
	</br></br></br>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<div class = "onerow">
				&emsp;
				<span class = "name"><u><b>HDFC</b></u></span>
				<span>:   </span>&emsp;&emsp;
				Remaining Stocks: <input type="text" name="noStocks">&emsp;&emsp;
				Stock Price: <input type="text" name="stockPrice">&emsp;&emsp;
				<input type="submit" name="submit" value="HDFC">
				
			</div>
	</form>
		</br></br></br>


		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<div class = "onerow">
			&emsp;
				<span class = "name"><u><b>Reliance</b></u></span>
				<span>:   </span>&emsp;&emsp;
				Remaining Stocks: <input type="text" name="noStocks">&emsp;&emsp;
				Stock Price: <input type="text" name="stockPrice">&emsp;&emsp;
				<input type="submit" name="submit" value="Reliance">
				
			</div>

		</form>	
	</br></br></br>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

			<div class = "onerow">
			&emsp;
				<span class = "name"><u><b>ITC</b></u></span>
				<span>:   </span>&emsp;&emsp;
				Remaining Stocks: <input type="text" name="noStocks">&emsp;&emsp;
				Stock Price: <input type="text" name="stockPrice">&emsp;&emsp;
				<input type="submit" name="submit" value="ITC">
				
			</div>
	</form>
			</br></br></br>


			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<div class = "onerow">
			&emsp;
				<span class = "name"><u><b>Kotak</b></u></span>
				<span>:   </span>&emsp;&emsp;
				Remaining Stocks: <input type="text" name="noStocks">&emsp;&emsp;
				Stock Price: <input type="text" name="stockPrice">&emsp;&emsp;
				<input type="submit" name="submit" value="Kotak">
				
			</div>
			</form>	
	</br></br></br>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

			<div class = "onerow">
			&emsp;
				<span class = "name"><u><b>Infosys</b></u></span>
				<span>:   </span>&emsp;&emsp;
				Remaining Stocks: <input type="text" name="noStocks">&emsp;&emsp;
				Stock Price: <input type="text" name="stockPrice">&emsp;&emsp;
				<input type="submit" name="submit" value="Infosys">
				
			</div>
	</form>
	</br></br></br>


	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<div class = "onerow">
			&emsp;
				<span class = "name"><u><b>TCS</b></u></span>
				<span>:   </span>&emsp;&emsp;
				Remaining Stocks: <input type="text" name="noStocks">&emsp;&emsp;
				Stock Price: <input type="text" name="stockPrice">&emsp;&emsp;
				<input type="submit" name="submit" value="TCS">
				
			</div>
	</form>	
	</br></br></br>


	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<div class = "onerow">
			&emsp;
				<span class = "name"><u><b>Adani</b></u></span>
				<span>:   </span>&emsp;&emsp;
				Remaining Stocks: <input type="text" name="noStocks">&emsp;&emsp;
				Stock Price: <input type="text" name="stockPrice">&emsp;&emsp;
				<input type="submit" name="submit" value="Adani">
				
			</div>
	</form>	
	</br></br></br>


	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<div class = "onerow">
			&emsp;
				<span class = "name"><u><b>Asian Paints</b></u></span>
				<span>:   </span>&emsp;&emsp;
				Remaining Stocks: <input type="text" name="noStocks">&emsp;&emsp;
				Stock Price: <input type="text" name="stockPrice">&emsp;&emsp;
				<input type="submit" name="submit" value="Asian_Paints">
				
			</div>
	</form>	
	</br></br></br>


	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<div class = "onerow">
			&emsp;
				<span class = "name"><u><b>Airtel</b></u></span>
				<span>:   </span>&emsp;&emsp;
				Remaining Stocks: <input type="text" name="noStocks">&emsp;&emsp;
				Stock Price: <input type="text" name="stockPrice">&emsp;&emsp;
				<input type="submit" name="submit" value="Airtel">
				
			</div>
	</form>
	</br></br></br>


	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<div class = "onerow">
			&emsp;
				<span class = "name"><u><b>Dr Reddy</b></u></span>
				<span>:   </span>&emsp;&emsp;
				Remaining Stocks: <input type="text" name="noStocks">&emsp;&emsp;
				Stock Price: <input type="text" name="stockPrice">&emsp;&emsp;
				<input type="submit" name="submit" value="Dr_Reddy">
				
			</div>
	</form>
	</br></br></br>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

			<div class = "onerow">
			&emsp;
				<span class = "name"><u><b>Burger King</b></u></span>
				<span>:   </span>&emsp;&emsp;
				Remaining Stocks: <input type="text" name="noStocks">&emsp;&emsp;
				Stock Price: <input type="text" name="stockPrice">&emsp;&emsp;
				<input type="submit" name="submit" value="Burger_King">
				
			</div>
	</form>
	</br></br></br>




			<!-- Stock Price: <input type="text" name="stockPrice"> -->

			<br><br>

			<span class="error"> <?php echo $errorMessage; ?></span>
			<span><?php echo $message; ?></span>



			<!-- <br><br><input type="submit" name="submit" value="Submit"> -->

		
<h2>News</h2>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			
			<br><br>

			News: <textarea name="news" rows="5" cols="40"></textarea>


			<br><br>




			<br><br><input type="submit" name="submitnews" value="Submit">
		</form>



	</div>
</body>

</html>