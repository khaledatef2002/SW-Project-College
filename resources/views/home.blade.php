@extends('master')

@section('title', 'Home Page')

@section('home-active', 'active')

@section('content')
<div class="container mt-4 col-lg-4 col-12">
    <h2 class="text-center mb-3">Our Team</h2>
    <!-- Table to show data -->
    <table class="table bg-white text-center">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Khaled Atef</td>
            </tr>
            <tr>
                <td>Abdullah Elagamy</td>
            </tr>
            <tr>
                <td>Mahmoud Moustafa</td>
            </tr>
            <tr>
                <td>Mazen Sokkar</td>
            </tr>
            <tr>
                <td>Ahmed Tarek</td>
            </tr>
            <tr>
                <td>Abdullah Youssry</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
@endsection