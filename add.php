<!-- Write a simple HTML page -->
<!DOCTYPE html>
<html>
<head>
<title>Add a new record</title>
</head>
<body>
<h1>Add a new record</h1>
<form action="handler.php" method="post">
<p>Name: <input type="text" name="name"  /></p>
<p>Website: <input type="text" name="website"  /></p>
<p>Country: <input type="text" name="country" maxlength=2 /></p>
<p>TYPE: <input type="text" name="type"  /></p>
<p>Payment: <input type="text" name="payment"  /></p>
<p>Cost: <input type="text" name="cost"  /></p>
<p>Currency: <input type="text" name="currency"  /></p>
<p>ValidDate: <input type="text" name="validdate"  /></p>
<p>FirstName: <input type="text" name="firstname"  /></p>
<p>LastName: <input type="text" name="lastname"  /></p>
<p>Email: <input type="text" name="email"  /></p>
<p>ProductKey: <input type="text" name="productkey"  /></p>
<p>Remarks: <input type="text" name="remarks"  /></p>
<p><input type="submit" name="submit" value="Submit" /></p>
</form>
</body>
</html>