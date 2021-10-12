<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beneficiaries;

class BeneficiariesController extends Controller
{
    public function BeneficiariesView(){

        $data['allData'] = Beneficiaries::all();

        return view('backend.beneficiarie.view_beneficiarie', $data);

    }

    public function BeneficiariesAdd(){

        return view('backend.beneficiarie.add_beneficiarie');

    }
}
