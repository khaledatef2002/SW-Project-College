@extends('master')

@section('title', 'Courses')

@section('course-active', 'active')

@section('content')
<div class="container mt-4">
    <!-- Add Button -->
    <div class="mb-3 text-end">
        <a href="{{ route('courses.create') }}"><button type="button" class="btn btn-primary">Add New</button></a>
    </div>
    <!-- Table to show data -->
    @session('success')
        <div class="alert alert-success">{{ session('success') }}</div>
    @endsession
    <table class="table bg-white text-center">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Course Name</th>
                <th scope="col">Semester</th>
                <th scope="col">Doctor</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if (count($courses) > 0)
                @foreach ($courses as $course)
                    <tr>
                        <th scope="row">{{ $course->id }}</th>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->semester->semester_name }}</td>
                        <td>{{ $course->doctor->name ?? '' }}</td>
                        <td>
                            <a href="{{ route('courses.edit', ['course' => $course]) }}"><button type="button" class="btn btn-primary">Edit</button></a>
                            <form class="d-inline-block" action="{{ route('courses.delete', ['course'=> $course]) }}" method="POST">
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
    {{ $courses->render('pagination::bootstrap-5') }}
</div>
@endsection