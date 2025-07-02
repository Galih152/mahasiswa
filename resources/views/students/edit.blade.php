@extends('layouts.app')

@section('content')
    <div class="max-w-xl mx-auto p-4 bg-white rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Edit Student</h1>

        <form method="POST" action="{{ route('students.update', $student->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Name</label>
                <input type="text" name="name"
                       value="{{ $student->name }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400"
                       required>
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Student Number</label>
                <input type="text" name="student_number"
                       value="{{ $student->student_number }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400"
                       required>
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Major</label>
                <input type="text" name="major"
                       value="{{ $student->major }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400"
                       required>
            </div>

            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                Update
            </button>
        </form>
    </div>
@endsection
