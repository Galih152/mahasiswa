@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
        <div class="bg-blue-500 text-white rounded-lg p-4 shadow">
            <h2 class="text-xl">Students</h2>
            <p class="text-3xl font-bold">{{ \App\Models\Student::count() }}</p>
        </div>
        <div class="bg-green-500 text-white rounded-lg p-4 shadow">
            <h2 class="text-xl">Courses</h2>
            <p class="text-3xl font-bold">{{ \App\Models\Course::count() }}</p>
        </div>
        <div class="bg-yellow-500 text-white rounded-lg p-4 shadow">
            <h2 class="text-xl">Grades</h2>
            <p class="text-3xl font-bold">{{ \App\Models\Grade::count() }}</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Table rata-rata nilai per mahasiswa -->
        <div class="bg-white rounded shadow p-4 overflow-x-auto">
            <h2 class="text-xl font-bold mb-4">Average Grade per Student</h2>
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="py-2 px-4 text-left">Student Name</th>
                        <th class="py-2 px-4 text-left">Average Grade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (\App\Models\Student::with('grades')->get() as $student)
                        <tr class="border-b">
                            <td class="py-2 px-4">{{ $student->name }}</td>
                            <td class="py-2 px-4">
                                {{ $student->grades->avg('grade') ?? '-' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Table detail nilai -->
        <div class="bg-white rounded shadow p-4 overflow-x-auto">
            <h2 class="text-xl font-bold mb-4">Student Course Grades</h2>
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="py-2 px-4 text-left">Student</th>
                        <th class="py-2 px-4 text-left">Course</th>
                        <th class="py-2 px-4 text-left">Grade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (\App\Models\Grade::with(['student', 'course'])->get() as $grade)
                        <tr class="border-b">
                            <td class="py-2 px-4">{{ $grade->student->name }}</td>
                            <td class="py-2 px-4">{{ $grade->course->course_name }}</td>
                            <td class="py-2 px-4">{{ $grade->grade }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
