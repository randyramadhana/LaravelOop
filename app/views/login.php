<!doctype html>
<html>
<head>
</head>
<body>
	<span>Login</span>
	<?php 
	echo Form::open(array('route' => 'postLogin'));
	echo Form::label('username', 'Username');
	echo Form::text('username');
	echo Form::label('password', 'Password');
	echo Form::password('password');
	echo Form::submit('login');
	echo Form::close();
	?>

	<span>Register</span>
	<?php
	echo Form::open(array('route' => 'postRegister'));
	echo Form::label('username', 'Username');
	echo Form::text('username');
	echo Form::label('password', 'Password');
	echo Form::password('password');
	echo Form::label('class', 'Programmer');
	echo Form::radio('class', 'Programmer', true);
	echo Form::label('class', 'Graphic Designer');
	echo Form::radio('class', 'Graphic Designer', false);
	echo Form::submit('register');
	echo Form::close();
	if (isset($class)) 
	{
		echo $class;
	}

	if (Session::get('notice')) 
	{
		Session::get('notice');
	}
	?>

	

</body>
</html>
