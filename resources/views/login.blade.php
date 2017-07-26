<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Tran Quang Hoa">
	<meta name="description" content="Login">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="{{ url('Login/style.css') }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="card card-container">
		<form action="{{ route('post.login') }}" method="POST">
			<img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" />
			<!-- <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" /> -->
			<p id="profile-name" class="profile-name-card"></p>
			 	@if(isset($msg))
			 	<span class="text-danger">{{$msg}}</span>
			 	@endif
				<input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>
				<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
				<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
			</form><!-- /form -->
		</div><!-- /card-container -->
	</div><!-- /container -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{ url('Login/loginls.js') }}"></script>
</body>

</html>