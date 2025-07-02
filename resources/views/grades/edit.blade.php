@extends('layouts.app')

@section('content')
    <div class="max-w-xl mx-auto p-4 bg-white rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Edit Grade</h1>

        <form method="POST" action="{{ route('grades.update', $grade->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Student</label>
                <select name="student_id"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400"
                        required>
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}"
                            {{ $student->id == $grade->student_id ? 'selected' : '' }}>
                            {{ $student->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Course</label>
                <select name="course_id"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400"
                        required>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}"
                            {{ $course->id == $grade->course_id ? 'selected' : '' }}>
                            {{ $course->course_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Grade</label>
                <input type="number" name="grade" step="0.01"
                       value="{{ $grade->grade }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400"
                       required>
            </div>

            <button type="submit"
                class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded">
                Update
            </button>
        </form>
    </div>
@endsection
