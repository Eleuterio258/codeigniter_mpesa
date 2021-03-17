<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		$dados = ['titolo' => "Home page"];
		echo view('layout/header', $dados);
        echo view('home/index');
        echo view('layout/footer');
	}
}
