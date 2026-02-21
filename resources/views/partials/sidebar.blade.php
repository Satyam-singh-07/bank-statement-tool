<div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64 bg-gradient-to-b from-blue-800 to-blue-900">

        <div class="flex items-center justify-center h-16 bg-blue-900">
            <span class="text-white text-xl font-semibold">📄 PDF Entry Tool</span>
        </div>

        <div class="flex flex-col flex-grow px-4 mt-5">
            <nav class="flex-1 space-y-2">

                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center px-4 py-3 rounded-lg
   {{ request()->routeIs('admin.dashboard') ? 'bg-blue-700 text-white' : 'text-blue-100 hover:bg-blue-700' }}">
                    <i class="fas fa-dashboard w-6"></i>
                    <span class="ml-2">Dashboard</span>
                </a>

                <a href="{{ route('admin.statement') }}"
                    class="flex items-center px-4 py-3 rounded-lg
   {{ request()->routeIs('admin.statement') ? 'bg-blue-700 text-white' : 'text-blue-100 hover:bg-blue-700' }}">
                    <i class="fas fa-upload w-6"></i>
                    <span class="ml-2">Generate New Statement</span>
                </a>

                {{-- <a href="#" class="flex items-center px-4 py-3 text-blue-100 hover:bg-blue-700 rounded-lg">
                    <i class="fas fa-history w-6"></i>
                    <span class="ml-2">Processing History</span>
                </a> --}}

            </nav>

            <div class="flex items-center px-4 py-4 mt-auto border-t border-blue-700">
                <img class="w-8 h-8 rounded-full" src="https://via.placeholder.com/32" alt="User">
                <div class="ml-3">
                    <p class="text-sm text-white">Admin</p>
                    <p class="text-xs text-blue-300">admin@example.com</p>
                </div>
            </div>

        </div>
    </div>
</div>
