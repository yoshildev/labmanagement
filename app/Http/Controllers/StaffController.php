<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Exception;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function add($id = null)
    {
        try {
            $staffCount = (Staff::count() +1);
            if ($id) {
                $staff = Staff::find($id);
                if ($staff) {
                    return view('franchisee.staff.add', compact('staff','staffCount'));
                }
            } else {
                return view('franchisee.staff.add',compact('staffCount'));
            }
        } catch (Exception $e) {
            return error($e->getMessage());
        }
    }
    public function addSubmit(Request $r)
    {
        $r->validate([
            'first_name' => "required",
            'last_name' => "required",
            'dob' => "required",
            "gender" => "required",
            "specialization" => "required",
            "address" => "required",
        ]);
        try {
            if (empty($r->id)) {
                $doctor = new Doctor();
                $message = "Added";
            } else {
                $doctor = Doctor::find($r->id);
                $message = "Updated";
            }
            $doctor->first_name = $r->first_name;
            $doctor->last_name = $r->last_name;
            $doctor->dob = $r->dob;
            $doctor->gender = $r->gender;
            $doctor->specialization = $r->specialization;
            $doctor->remark = $r->remark ?? null;
            $doctor->address = $r->address;
            $doctor->franchiseeId = Session::get('FRANCHISEE_ID');
            $doctor->save();
            return success("Doctor $message Successfully");
        } catch (Exception $e) {
            return error($e->getMessage());
        }
    }
    public function all()
    {
        $doctors  = Doctor::where('franchiseeId', Session::get('FRANCHISEE_ID'))->get();
        return view('franchisee.doctor.all', compact('doctors'));
    }
    public function delete(Doctor $doctor)
    {
        try {
            $doctor->delete();
            return success("doctor Deleted Successfully");
        } catch (Exception $e) {
            return error($e->getMessage());
        }
    }
}
