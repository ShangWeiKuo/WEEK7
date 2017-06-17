<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>購物車</title>
	<style>
		.form-area {width: 1500px;}
		.select {height: 28px;}
		.input-number {height: 23px; width: 80px;}
		.input-number-area {width: 85px; margin-right: 30px; margin-left: 30px;}
		.button {height: 28px;}
	</style>
</head>
<body bgcolor="#FFDDAA">
	
	<div class="form-area">
	<form action="homework3(catalog).php" method="post">

		選擇商品:
	
		<select name="item" class="select">
			<option value="S001">10吋變形平板 - $12000</option>
			<option value="S002">15.6吋筆記型電腦 - $27000</option>
			<option value="S003">iPhone手機 - $21000</option> 
		</select>

		<span class="input-number-area">
			<input type="text" name="quantity" class="input-number" placeholder="商品數量" required>個(
			<font color="red">*</font>
			必填)
		</span>

		<input type="submit" value="訂購" class="button">

	</form>
	</div>
	<br>
	<hr>

	<a href="homework3(list)-A1043338.php">商品目錄</a></td>
	&nbsp;
	&nbsp;
	<a href="homework3(shoppingcart).php">檢視購物車</a></td>
	
</body>
</html>