<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class CustomerController extends BaseController
{
    public function index()
    {
        $model = new CustomerModel();
        $data['customers'] = $model->findAll(); // Replaces static array

        return view('customers/index', $data);
    }
}