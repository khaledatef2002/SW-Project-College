@extends('master')

@section('title', 'Create Doctor')

@section('doctor-active', 'active')

@section('content')

<div class="container mt-4 col-lg-4 col-12 bg-white py-2 bordered">
    @session('success')
        <div class="alert alert-success">{{ session('success') }}</div>
    @endsession
    <form action="{{ route('doctors.store') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="doctor_name" class="fw-bold mb-2">Doctor Name: @error('name') <span class="text-danger">*{{ $message }}</span> @enderror</label>
            <input name="name" id="doctor_name" type="text" class="form-control" placeholder="Enter Doctor Name" value="{{ old('name') }}">
        </div>
        <div class="form-group mb-3">
            <label for="doctor_email" class="fw-bold mb-2">Doctor Email: @error('email') <span class="text-danger">*{{ $message }}</span> @enderror</label>
            <input name="email" id="doctor_email" type="email" class="form-control" placeholder="Enter Doctor Email" value="{{ old('email') }}">
        </div>
        <div class="form-group mb-3">
            <label for="doctor_salary" class="fw-bold mb-2">Doctor Salary: @error('salary') <span class="text-danger">*{{ $message }}</span> @enderror</label>
            <input name="salary" id="doctor_salary" type="number" step="0.01" class="form-control" placeholder="Enter Doctor Salary" value="{{ old('salary') }}">
        </div>
        <button type="submit" class="btn btn-success">Add</button>
    </form>

</div>

@endsection