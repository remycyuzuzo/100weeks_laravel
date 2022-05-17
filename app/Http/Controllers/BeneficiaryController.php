<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    public function index()
    {
        return view('admin.beneficiaries.new-beneficiary');
    }
}
