<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <nav class="bg-gray-800 text-white p-4 flex gap-4">
        <a href="{{ url('/') }}" class="text-lg">Dashboard</a>
        <a href="{{ route('students.index') }}">Students</a>
        <a href="{{ route('courses.index') }}">Courses</a>
        <a href="{{ route('grades.index') }}">Grades</a>
    </nav>
    <div class="p-4">
        @yield('content')
    </div>
</body>
</html>
