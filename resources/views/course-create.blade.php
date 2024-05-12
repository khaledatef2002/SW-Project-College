@extends('master')

@section('title', 'Create Course')

@section('course-active', 'active')

@section('content')

<div class="container mt-4 col-lg-4 col-12 bg-white py-2 bordered">
    @session('success')
        <div class="alert alert-success">{{ session('success') }}</div>
    @endsession
    <form action="{{ route('courses.store') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="course_name" class="fw-bold mb-2">Course Name: @error('name') <span class="text-danger">*{{ $message }}</span> @enderror</label>
            <input name="name" id="course_name" type="text" class="form-control" placeholder="Enter Course Name" value="{{ old('name') }}">
        </div>
        <div class="form-group mb-3">
            <label for="doctor_id" class="fw-bold mb-2">Doctor: @error('doctor_id') <span class="text-danger">*{{ $message }}</span> @enderror</label>
            <select name="doctor_id" id="doctor_id" class="form-control">
                <option value="">No Doctors</option>
                @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="semester_id" class="fw-bold mb-2">Semester: @error('semester_id') <span class="text-danger">*{{ $message }}</span> @enderror</label>
            <select name="semester_id" id="semester_id" class="form-control">
                <option value="">No Semester</option>
                @foreach ($semesters as $semester)
                    <option value="{{ $semester->id }}">{{ $semester->semester_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Add</button>
    </form>

</div>

@endsection