





@extends('admin.master')


@section('body')

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>Sign Up</h2>
		<form action="" method="post">
			<div class="username">
				<span class="username">Username:</span>
				<input type="text" name="name" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="username">
				<span class="username">Email:</span>
				<input type="text" name="email" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="password" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Confirm Password:</span>
				<input type="password" name="confirmpassword" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="login-w3">
					<input type="submit" name="btn" class="login" value="Sign Up">
			</div>
			<div class="clearfix"></div>
		</form>
		<div class="back">
						<a href="{{route ('home')}}">Back to home</a>
				</div>
				<div class="footer">
					<p>&copy; 2016 Pooled . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
				</div>
	</div>
	</div>
	</div>
@endsection