<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bank Statement Tool')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

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

</body>
</html>