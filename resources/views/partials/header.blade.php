<header class="bg-white shadow-sm">
    <div class="flex items-center justify-between px-6 py-4">
        <h2 class="text-xl font-semibold text-gray-800">
            @yield('page-title', 'Dashboard')
        </h2>

        <div class="flex items-center space-x-4">
            <button class="relative">
                <i class="fas fa-bell text-gray-500 text-xl"></i>
            </button>

            <form method="POST" action="{{route('admin.logout')}}">
                @csrf
                <button type="submit"
                        class="flex items-center text-gray-500 hover:text-gray-700">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Logout
                </button>
            </form>
        </div>
    </div>
</header>