<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LabController extends Controller
{
    public function add($id = null)
    {
        // return view('franchisee.lab.add');
        try {
            if ($id) {
                $lab = Lab::find($id);
                if ($lab) {
                    return view('franchisee.lab.add', compact('lab'));
                }
            } else {
                return view('franchisee.lab.add');
            }
        } catch (Exception $e) {
            return error($e->getMessage());
        }
    }
    public function addSubmit(Request $r)
    {
        $r->validate([
            'labname' => "required|unique:labs,name," . ($r->id ?? ''),
            'address' => "required",
        ]);
        try {
            if (empty($r->id)) {
                $lab = new Lab();
                $message = "Added";
            } else {
                $lab = Lab::find($r->id);
                $message = "Updated";
            }
            $lab->name = $r->labname;
            $lab->address = $r->address;
            $lab->franchisee_id = Session::get('FRANCHISEE_ID');
            $lab->save();
            return success("Lab $message Successfully");
        } catch (Exception $e) {
            // dd($r->all());   
            // dd($e->getMessage());
            return error($e->getMessage());
        }
    }
    public function all()
    {
        $labs  = Lab::where('franchisee_id', Session::get('FRANCHISEE_ID'))->get();
        return view('franchisee.lab.all', compact('labs'));
    }
    public function delete(Lab $lab)
    {
        try {
            $lab->delete();
            return success("Lab Deleted Successfully");
        } catch (Exception $e) {
            return error($e->getMessage());
        }
    }
}
