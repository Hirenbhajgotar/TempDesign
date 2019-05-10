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

	],

	'add_template' => [
		[
			'field' => 'temp_header',
			'label' => 'Template heading',
			'rules' => 'required'
		],
		[
			'field' => 'temp_sub_header',
			'label' => 'Template sub heading',
			'rules' => 'required'
		],
		[
			'field' => 'freamwork_name',
			'label' => 'Freamework name',
			'rules' => 'required'
		],
		[
			'field' => 'freamwork_ver',
			'label' => 'Freamework version',
			'rules' => 'required'
		],
		[
			'field' => 'description',
			'label' => 'Description',
			'rules' => 'required'
		]
	],


	'subscriber' => [
		[
			'field'  => 'email',
			'label'  => 'Email',
			'rules'  => 'required|is_unique[subscrition.email]|valid_email',
			'errors' => [
				'is_unique' =>'this %s is already subscribed'
			],
		]
	]





]


?>