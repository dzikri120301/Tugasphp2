<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
body{
    font-family: 'open-sans',sans-serif;
    background: #031829;
}

h1 {
    text-align: center;
    text-transform: 300;
}

.kotak_login {
    width: 350px;
	height: 400px;
    background: #32acff;
    margin: 80px auto;
    padding: 30px 20px;
	display: flex;
	flex-direction: column;
	justify-content: space-around;
}

label {
    font-size: 12pt;
    color: #f5d936;
}

.form_login {
    box-sizing: border-box;
    width: 100%;
    padding: 10px;
    font-size: 11pt;
    margin-top: 10px;
}

.tombol_login {
    text-align: center;
    background: #f49320;
    color: #fff;
    font-size: 11pt;
    width: 100%;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
    cursor: pointer;
}
	</style>
</head>
<body>
	<div class="kotak_login">
		<h1>Halaman Login</h1>
		<form action="login.php" method="post">		
			<table class="tb">
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" class="form_login"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" class="form_login"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="login" value="Log In" class="tombol_login"></td>
				</tr>
			</table>
		</form>
	</div>
	
</body>
</html>