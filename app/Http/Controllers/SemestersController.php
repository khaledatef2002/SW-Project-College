<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use Illuminate\Http\Request;

class SemestersController extends Controller
{
    public static function view()
    {
        $semesters = Semester::paginate(7);
        return view('semesters', get_defined_vars());
    }

    public static function delete(Semester $semester)
    {
        $semester->delete();

        return back()->with('success', 'The semester has been delete successfully');
    }

    public static function viewUpdate(Semester $semester)
    {
        return view('semester-update', get_defined_vars());
    }

    public static function viewCreate()
    {
        return view('semester-create');
    }

    public static function update(Request $req, Semester $semester)
    {
        $data = $req->validate([
            'semester_name' => ['required', 'unique:semesters', 'string']
        ]);

        $semester->update($data);

        return to_route('semesters.index')->with('success', "Semester has been updated successfully to be {$semester->semester_name}");
    }
    public static function create(Request $req)
    {
        $data = $req->validate([
            'semester_name' => ['required','unique:semesters', 'string']
        ]);

        Semester::create($data);

        return to_route('semesters.index')->with('success', "Semester {$req->input('semester_name')} has been created successfully");
    }
}
