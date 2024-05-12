<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public static function view()
    {
        $doctors = Doctor::paginate(7);
        return view('doctors', get_defined_vars());
    }

    public static function delete(Doctor $doctor)
    {
        $doctor->delete();

        return back()->with('success', 'The doctor has been delete successfully');
    }

    public static function viewUpdate(Doctor $doctor)
    {
        return view('doctor-update', get_defined_vars());
    }

    public static function viewCreate()
    {
        return view('doctor-create');
    }

    public static function update(Request $req, Doctor $doctor)
    {
        $data = $req->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'salary' => ['required', 'numeric']
        ]);

        $doctor->update($data);

        return to_route('doctors.index')->with('success', "Doctor has been updated successfully to be {$doctor->name}");
    }
    public static function create(Request $req)
    {
        $data = $req->validate([
            'name' => ['required', 'unique:doctors', 'string'],
            'email' => ['required', 'unique:doctors', 'email'],
            'salary' => ['required', 'numeric']
        ]);

        $doctor = Doctor::create($data);

        return to_route('doctors.index')->with('success', "Doctor {$req->input('name')} has been created successfully");
    }
}
