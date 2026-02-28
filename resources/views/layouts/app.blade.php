<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bank Statement Tool')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
</head>

<body class="bg-gray-50">
    <!-- Floating Notifications -->
    <div class="fixed top-5 right-5 space-y-3 z-50">

        {{-- Success Message --}}
        @if (session('success'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition
                class="flex items-center justify-between bg-green-600 text-white px-6 py-4 rounded-lg shadow-lg min-w-[300px]">

                <span>{{ session('success') }}</span>

                <button @click="show = false" class="ml-4 text-white hover:text-gray-200 text-xl leading-none">
                    &times;
                </button>
            </div>
        @endif


        {{-- Error Message --}}
        @if (session('error'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition
                class="flex items-center justify-between bg-red-600 text-white px-6 py-4 rounded-lg shadow-lg min-w-[300px]">

                <span>{{ session('error') }}</span>

                <button @click="show = false" class="ml-4 text-white hover:text-gray-200 text-xl leading-none">
                    &times;
                </button>
            </div>
        @endif


        {{-- Validation Errors --}}
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" x-transition
                    class="flex items-center justify-between bg-red-500 text-white px-6 py-4 rounded-lg shadow-lg min-w-[300px]">

                    <span>{{ $error }}</span>

                    <button @click="show = false" class="ml-4 text-white hover:text-gray-200 text-xl leading-none">
                        &times;
                    </button>
                </div>
            @endforeach
        @endif

    </div>

    <div class="flex h-screen overflow-hidden">

        {{-- Sidebar --}}
        @include('partials.sidebar')

        <div class="flex flex-col flex-1 overflow-hidden">

            {{-- Header --}}
            @include('partials.header')

            {{-- Main Content --}}
            <main class="flex-1 overflow-y-auto bg-gray-50 p-6">
                @yield('content')
            </main>

        </div>
    </div>

    @yield('scripts')
    <script src="//unpkg.com/alpinejs" defer></script>

</body>

</html>
