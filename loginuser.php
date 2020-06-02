<form method="post" action="">
	<div>
		<input type="text" name="email" value="<?=@$_POST['email']?>"/>
	</div>
	<div>
		<input type="password" name="password" value="<?=@$_POST['password']?>" />
	</div>
	<input type="submit" value="Log In"/>
</form>