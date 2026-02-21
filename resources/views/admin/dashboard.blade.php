@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">

    <div class="bg-white rounded-lg shadow p-6">
        <p class="text-sm text-gray-500">Total Processed</p>
        <p class="text-2xl font-semibold">247</p>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <p class="text-sm text-gray-500">This Month</p>
        <p class="text-2xl font-semibold">32</p>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <p class="text-sm text-gray-500">Pending</p>
        <p class="text-2xl font-semibold">5</p>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <p class="text-sm text-gray-500">Banks Supported</p>
        <p class="text-2xl font-semibold">3</p>
    </div>

</div>

<div class="bg-white rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold mb-4">
        Upload Statement PDF
    </h3>

    <form method="POST" action="#" enctype="multipart/form-data">
        @csrf

        <input type="file" name="pdf"
               class="border p-2 rounded w-full mb-4">

        <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded">
            Upload
        </button>
    </form>
</div>

@endsection