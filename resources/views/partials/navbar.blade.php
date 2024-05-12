<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand" href="#">University System</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link @yield('home-active')" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('course-active')" href="{{ route('courses.index') }}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('doctor-active')" href="{{ route('doctors.index') }}">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('semesters-active')" href="{{ route('semesters.index') }}">Semesters</a>
                </li>
            </ul>
        </div>
    </div>
</nav>