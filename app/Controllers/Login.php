<?php

namespace App\Controllers;

class Login extends BaseController
{

	public function Login()
	{
		$data['content'] = 'login';
		return view('login', $data);
	}
}
