<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Doctor;
use App\Models\Semester;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public static function view()
    {
        $courses = Course::paginate(7);
        return view('courses', get_defined_vars());
    }

    public static function delete(Course $course)
    {
        $course->delete();

        return back()->with('success', 'The course has been delete successfully');
    }

    public static function viewUpdate(Course $course)
    {
        return view('course-update', get_defined_vars());
    }

    public static function viewCreate()
    {
        $doctors = Doctor::all();
        $semesters = Semester::all();
        return view('course-create', get_defined_vars());
    }

    public static function update(Request $req, Course $course)
    {
        $data = $req->validate([
            'name' => ['required', 'unique:courses', 'string'],
            'doctor_id' => ['required', 'exists:doctors,id'],
            'semester_id' => ['required', 'exists:semesters,id']
        ]);

        $course->update($data);

        return to_route('courses.index')->with('success', "Course has been updated successfully to be {$course->name}");
    }
    public static function create(Request $req)
    {
        $data = $req->validate([
            'name' => ['required', 'unique:courses', 'string'],
            'doctor_id' => ['required', 'exists:doctors,id'],
            'semester_id' => ['required', 'exists:semesters,id']
        ]);

        $course = Course::create($data);

        return to_route('courses.index')->with('success', "Course {$req->input('name')} has been created successfully");
    }
}
