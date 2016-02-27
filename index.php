<?php
	require "app/bootstrap.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Xchange, The foreign exchange calculator</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

<div id="page-container">

	<section id="header">
		<hgroup id="app-intro">
			<h1><a href=".">Xchange</a></h1>
			<h3>Foreign Currency Exchange Calculator</h3>
		</hgroup>

		<hgroup id="agent-info">
			<h2>[Agent Name]</h2>
			<h5>Base Currency: 
				<figure class="currency">
					<img src="" alt="[Currency Country-Flag image]">
					<figcaption>[Currency Symbol]</figcaption>
				</figure>
			</h5>
		</hgroup>
	</section><!-- end #header -->

	<section id="main">

		<div id="calculator">

			<h3>Calculator</h3>
			<form method="GET" action="index.php">
				
				<label>From</label>
				<select name="currency_from">
					<option>[Currency Symbol]</option>
				</select>

				<label>Amount</label>
				<input type="text" name="amount_from" 
					value="0.00">

				<br>

				<label>To</label>
				<select name="currency_to">
					<option selected>[Base Currency Symbol]</option>
					<option>[Currency Symbol]</option>
				</select>

				<label>Amount</label>
				<input type="text" name="amount_to" 
					value="0.00" disabled>

				<br>

				<button type="submit">Xchange &rsaquo;</button>
			</form>
		</div><!-- end #calculator -->

		<table id="currencies" border="1">
			<caption><h3>Table of Currencies</h3></caption>
			<tr>
				<th>Country</th>
				<th>Currency</th>
				<th>Symbol</th>
				<th>Rate, Buying</th>
				<th>Rate, Selling</th>
			</tr>

			<tr>
				<td><img src="" alt="[Currency Country-Flag image]"> [Country Name]</td>
				<td>[Currency Full Name]</td>
				<td>[Currency Symbol]</td>
				<td>0.00</td>
				<td>0.00</td>
			</tr>
			<tr>
				<td><img src="" alt="[Currency Country-Flag image]"> [Country Name]</td>
				<td>[Currency Full Name]</td>
				<td>[Currency Symbol]</td>
				<td>0.00</td>
				<td>0.00</td>
			</tr>
		</table>
		
	</section><!-- end #main -->

	<hr>

	<section id="footer">
		
		<div id="useful-links">
			<ul>
				<li><a href="http://www.accessforex.com">&laquo; Back to Website</a></li>
			</ul>
		</div>

		<div id="credits">
			<p>Copyright &copy; <?php echo date('Y') ?>, MSW</p>
		</div>
	</section><!-- end #footer -->

</div>

</body>
</html>