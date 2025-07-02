@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Grades</h1>

        <a href="{{ route('grades.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded mb-4 inline-block">
            + Add Grade
        </a>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto rounded shadow">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="py-2 px-4 text-left">Student</th>
                        <th class="py-2 px-4 text-left">Course</th>
                        <th class="py-2 px-4 text-left">Grade</th>
                        <th class="py-2 px-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($grades as $grade)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">{{ $grade->student->name }}</td>
                        <td class="py-2 px-4">{{ $grade->course->course_name }}</td>
                        <td class="py-2 px-4">{{ $grade->grade }}</td>
                        <td class="py-2 px-4 flex gap-2">
                            <a href="{{ route('grades.edit', $grade) }}"
                               class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm">
                                Edit
                            </a>
                            <form action="{{ route('grades.destroy', $grade) }}" method="POST"
                                  onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
