<!-- resources/views/components/sidebar.blade.php -->
<script src="//unpkg.com/alpinejs" defer></script>

<div x-data="{ open: false }" class="md:flex">
    <!-- Mobile Topbar -->
    <div class="bg-blue-800 text-white flex items-center justify-between p-4 md:hidden">
        <button @click="open = !open" class="focus:outline-none">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Sidebar -->
    <aside
        :class="{'block': open, 'hidden': !open}"
        class="bg-blue-800 text-white w-full md:w-64 md:block h-screen p-6 flex flex-col justify-between">
        
        <div>
            <div class="text-2xl font-bold text-center md:text-left mb-8">GW AssetSys</div>
            <ul class="space-y-4 text-center md:text-left">
                <li><a href="#" class="block hover:text-gray-300">Dashboard</a></li>
                <li><a href="#" class="block hover:text-gray-300">Assets</a></li>
                <li><a href="#" class="block hover:text-gray-300">Maintenance</a></li>
                <li><a href="#" class="block hover:text-gray-300">Reports</a></li>
            </ul>
        </div>
        <div class="text-sm text-center md:text-left text-gray-300 mt-8">Welcome, Admin</div>
    </aside>
</div>
