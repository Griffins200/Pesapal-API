<form action="pesapal-iframe.php" method="post">
	<link rel="stylesheet" type= "text/css" href="style.css">
	
	<h1>Donor Details</h1>
	<br>
	<img class="logo" src="images/PesaPal-600x361.jpg" alt="">
	<hr>
	<p class="para">---WELCOME TO PESAPAL</p>
	<table>
		<tr>
			<td class="tabletitle">Amount:</td>
			<td><input type="text" name="amount" value="500" />
			(in Kshs)
			</td>
		</tr>
		<tr>
			<td class="tabletitle">Type:</td>
			<td><input type="text" name="type" value="MERCHANT" readonly="readonly" />
			(leave as default - MERCHANT)
			</td>
		</tr>
		<tr>
			<td class="tabletitle">Description:</td>
			<td><input type="text" name="description" value="Order Description" /></td>
		</tr>
		<tr>
			<td class="tabletitle">Reference:</td>
			<td><input type="text" name="reference" value="001" />
			(the Order ID )
			</td>
		</tr>
		<tr>
			<td class="tabletitle">First Name:</td>
			<td><input type="text" name="first_name" value="John" /></td>
		</tr>
		<tr>
			<td class="tabletitle">Last Name:</td>
			<td><input type="text" name="last_name" value="Doe" /></td>
		</tr>
		<tr>
			<td class="tabletitle">Email Address:</td>
			<td><input type="text" name="email" value="john@yahoo.com" /></td>
		</tr>
		<tr>
			<td colspan="2"><input class="submit" type="submit" value="Make Payment" /></td>
		</tr>
	</table>
</form>