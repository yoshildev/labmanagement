<?php

namespace App\Http\Controllers;

use App\Models\InventoryMaterials;
use Illuminate\Http\Request;

class InventoryMaterialsController extends Controller
{
    public function requeststock(){
        return view('franchisee.inventory.requestStock');
    }
}
