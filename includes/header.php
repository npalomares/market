<header role="banner">
	<div class="container">
		<div class="logo col-sm-4">
			<h1>Market</h1>
		</div>

		<div class="nav-wrap col-sm-8">
			<nav class="pull-right">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a  class="login" href="#">Login</a></li>
				</ul>
			</nav>
		</div>
		<div class="user-wrap pull-right hide">
			<form class="user-form" method="post" action=".">
				<h4>Login</h4>
				<div class="form-component">
					<input class="username" name="username" placeholder="Username" />
					<span class="error"> </span>
				</div>
				<div class="form-component">
					<input class="password" name="password" placeholder="Password" />
					<span class="error"> </span>
				</div>	
				<div class="form-component">
					<input type="submit" class="btn btn-primary" name="submit" value="Login" />
				</div>					
			</form>

			<p>Not a registered user? <a href="includes/register.php" class="register-btn">Register Here</a></p>
		</div>
	</div>
</header>