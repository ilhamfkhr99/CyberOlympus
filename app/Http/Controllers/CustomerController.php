<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
        $customer = Customer::all();
        return view('customer', compact('customer'));
    }
}
