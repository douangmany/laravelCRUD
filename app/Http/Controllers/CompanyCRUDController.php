<?php

namespace App\Http\Controllers;

use App\Models\Company;

use Illuminate\Http\Request;

class CompanyCRUDController extends Controller
{
    //create Index
    public function Index()

    {
        $data['companies'] = Company::orderBy ('id','desc')->paginate(5);
        return view('companies.index',$data);
    }
    //create Resource
}
