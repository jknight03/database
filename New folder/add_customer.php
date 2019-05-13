<?php
if(count($_POST) > 0) {
	require_once("db.php");
	$sql = "INSERT INTO customer(firstname, lastname, phone, email) VALUES ('" . $_POST["firstname"] . "','" . $_POST["lastname"] . "','" . $_POST["phone"] . "','" . $_POST["email"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New Customer Added Successfully";
	}
}
?>
<html>
<head>
<title>Add New Customer</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmCustomer" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Customer</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add New Customer</td>
</tr>
<tr>
<td><label>First Name</label></td>
<td><input type="text" name="firstname" class="txtField"></td>
</tr>
<tr>
<td><label>Last Name</label></td>
<td><input type="text" name="lastname" class="txtField"></td>
</tr>
<td><label>Phone Number</label></td>
<td><input type="text" name="phone" class="txtField"></td>
</tr>
<td><label>Email Address</label></td>
<td><input type="text" name="email" class="txtField"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>