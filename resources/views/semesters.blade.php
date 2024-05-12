@extends('master')

@section('title', 'Semesters')

@section('semesters-active', 'active')

@section('content')
<div class="container mt-4">
    <!-- Add Button -->
    <div class="mb-3 text-end">
        <a href="{{ route('semesters.create') }}"><button type="button" class="btn btn-primary">Add New</button></a>
    </div>
    <!-- Table to show data -->
    @session('success')
        <div class="alert alert-success">{{ session('success') }}</div>
    @endsession
    <table class="table bg-white text-center">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Semester Name</th>
                <th scope="col">Courses</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if (count($semesters) > 0)
                @foreach ($semesters as $semester)
                    <tr>
                        <th scope="row">{{ $semester->id }}</th>
                        <td>{{ $semester->semester_name }}</td>
                        <td>{{ count($semester->course) }}</td>
                        <td>
                            <a href="{{ route('semesters.edit', ['semester' => $semester]) }}"><button type="button" class="btn btn-primary">Edit</button></a>
                            <form class="d-inline-block" action="{{ route('semesters.delete', ['semester'=> $semester]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr class="text-center">
                    <td colspan="3">No Data Found</td>
                </tr>
            @endif
        </tbody>
    </table>
    {{ $semesters->render('pagination::bootstrap-5') }}
</div>
@endsection