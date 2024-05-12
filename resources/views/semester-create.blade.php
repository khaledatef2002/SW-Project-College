@extends('master')

@section('title', 'Create Semester')

@section('semesters-active', 'active')

@section('content')

<div class="container mt-4 col-lg-4 col-12 bg-white py-2 bordered">
    @error('semester_name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @session('success')
        <div class="alert alert-success">{{ session('success') }}</div>
    @endsession
    <form action="{{ route('semesters.store') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="semester_name" class="fw-bold mb-2">Semester Name:</label>
            <input name="semester_name" id="semester_name" type="text" class="form-control" placeholder="Enter Semester Name" value="{{ old('semester_name') }}">
        </div>
        <button type="submit" class="btn btn-success">Add</button>
    </form>

</div>

@endsection