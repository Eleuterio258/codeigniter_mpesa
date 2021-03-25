<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class Login extends BaseController
{
	public function index()
	{
		$dados = ['titolo' => "Login"];
		echo view('layout/header', $dados);
		echo view('login/index');
	}
}
