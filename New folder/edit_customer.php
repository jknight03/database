<?php
require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE customer set firstname='" . $_POST["firstname"] . "', lastname='" . $_POST["lastname"] . "', phone='" . $_POST["phone"] . "', email='" . $_POST["email"] . "' WHERE customerid='" . $_POST["customerid"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM customer WHERE customerid='" . $_GET["customerid"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>Edit Customer</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmCustomer" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Customer</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit Customer</td>
</tr>
<tr>
<td><label>customerid</label></td>
<td><input type="hidden" name="customerid" class="txtField" value="<?php echo $row['customerid']; ?>"><input type="text" name="customerid" class="txtField" value="<?php echo $row['customerid']; ?>"></td>
</tr>
<tr>
<td><label>firstname</label></td>
<td><input type="text" name="firstname" class="txtField" value="<?php echo $row['firstname']; ?>"></td>
</tr>
<td><label>lastname</label></td>
<td><input type="text" name="lastname" class="txtField" value="<?php echo $row['lastname']; ?>"></td>
</tr>
<td><label>phone</label></td>
<td><input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>"></td>
</tr>
<td><label>email</label></td>
<td><input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>