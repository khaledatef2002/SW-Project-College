@extends('master')

@section('title', 'Edit Semester')

@section('semesters-active', 'active')

@section('content')

<div class="container mt-4 col-lg-4 col-12 bg-white py-2 bordered">
    @error('semester_name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @session('success')
        <div class="alert alert-success">{{ session('success') }}</div>
    @endsession
    <form action="{{ route('semesters.update', ['semester'=>$semester]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="semester_name" class="fw-bold mb-2">Semester Name:</label>
            <input name="semester_name" id="semester_name" type="text" class="form-control" placeholder="Enter Semester Name" value="{{ $semester->semester_name }}">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>

</div>

@endsection