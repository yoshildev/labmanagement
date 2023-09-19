<?php

namespace App\Http\Controllers;

use App\Models\CreditRecord;
use Illuminate\Http\Request;

class CreditRecordController extends Controller
{
    public function add(){
        return view('franchisee.credits.add');
    }
    public function addCredit(){
        return view('franchisee.credits.addCredit');
    }
}
