<?php 

$config = [

	'admin_register' => [
		[
			'field' => 'username',
			'label' => 'Username',
			'rules' => 'required|min_length[3]|max_length[25]|alpha_dash'
		],
		[
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|valid_email|is_unique[users.email]'
		],
		[
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|min_length[3]|max_length[25]|alpha_dash'
		],

	],

	'admin_login' => [
		[
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|valid_email'
		],
		[
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|alpha_dash'
		]

	]





]


?>