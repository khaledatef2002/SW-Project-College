@extends('master')

@section('title', 'Doctors')

@section('doctor-active', 'active')

@section('content')
<div class="container mt-4">
    <!-- Add Button -->
    <div class="mb-3 text-end">
        <a href="{{ route('doctors.create') }}"><button type="button" class="btn btn-primary">Add New</button></a>
    </div>
    <!-- Table to show data -->
    @session('success')
        <div class="alert alert-success">{{ session('success') }}</div>
    @endsession
    <table class="table bg-white text-center">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Doctor Name</th>
                <th scope="col">Doctor Email</th>
                <th scope="col">Doctor Salary</th>
                <th scope="col">Course</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if (count($doctors) > 0)
                @foreach ($doctors as $doctor)
                    <tr>
                        <th scope="row">{{ $doctor->id }}</th>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->email }}</td>
                        <td>{{ $doctor->salary }}$</td>
                        <td>{{ count($doctor->course) }}</td>
                        <td>
                            <a href="{{ route('doctors.edit', ['doctor' => $doctor]) }}"><button type="button" class="btn btn-primary">Edit</button></a>
                            <form class="d-inline-block" action="{{ route('doctors.delete', ['doctor'=> $doctor]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr class="text-center">
                    <td colspan="6">No Data Found</td>
                </tr>
            @endif
        </tbody>
    </table>
    {{ $doctors->render('pagination::bootstrap-5') }}
</div>
@endsection