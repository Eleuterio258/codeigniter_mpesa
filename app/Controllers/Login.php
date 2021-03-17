<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		$dados = ['titolo' => "Login"];
		echo view('layout/header', $dados);
		echo view('login/index');
	}
}
