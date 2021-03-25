<?php

namespace App\Controllers\Admin;

use App\Models\CustomersModel;
use App\Models\OrdersModel;

use App\Controllers\BaseController;

class Home extends BaseController
{


	public function index()

	{
		return view('auth/login');
	}
}
