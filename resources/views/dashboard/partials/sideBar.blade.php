<style>
    .hamburger-line {
        transition: all 0.3s ease;
    }
    .hamburger.active .hamburger-line:nth-child(1) {
        transform: translateY(8px) rotate(45deg); /* Top line rotates to form the X */
    }
    .hamburger.active .hamburger-line:nth-child(2) {
        opacity: 0; /* Middle line disappears */
    }
    .hamburger.active .hamburger-line:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg); /* Bottom line rotates to form the X */
    }
</style>

<!-- Updated Sidebar Toggle Button -->
<button id="menu-toggle" class="md:hidden fixed top-4 left-4 z-50 p-2 text-white bg-gray-800 rounded-lg shadow hamburger">
    <!-- Animated Hamburger Icon -->
    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path class="hamburger-line" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"/>
        <path class="hamburger-line" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16"/>
        <path class="hamburger-line" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 18h16"/>
    </svg>
</button>

<!-- Sidebar -->
<nav id="mobile-sidebar"
    class="bg-gray-900 fixed inset-y-0 left-0 z-40 w-64 transform -translate-x-full transition-transform duration-300 ease-in-out hidden md:relative md:translate-x-0 md:flex md:flex-col md:h-auto md:block">
    <div class="flex min-h-0 flex-1 flex-col">
        <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
            <!-- Logo / App Name -->
            <div class="flex flex-shrink-0 items-center px-4">
                <svg class="h-8 w-8 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                </svg>
                <h1 class="ml-2 text-white text-xl font-bold">Task Manager</h1>
            </div>

            <!-- Navigation Links -->
            <nav class="mt-5 flex-1 space-y-1 px-2">
                <!-- Dashboard -->
                <a href="{{ route('tasks.index') }}"
                   class="text-gray-300 hover:bg-gray-800 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ request()->routeIs('tasks.index') ? 'bg-gray-800 text-white' : '' }}">
                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-white" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Dashboard
                </a>

                <!-- Tasks -->
                <a href="{{ route('task.tasks') }}"
                   class="text-gray-300 hover:bg-gray-800 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ request()->routeIs('task.tasks') ? 'bg-gray-800 text-white' : '' }}">
                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-white" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    My Tasks
                </a>
            </nav>
        </div>

        <!-- Logout Button -->
        <div class="flex-shrink-0 flex border-t border-gray-700 p-6 bg-gray-800 rounded-b-lg">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="flex items-center text-red-600 px-[50px] hover:text-white transition duration-200 ease-in-out hover:bg-red-600 hover:rounded-lg p-2">
                    <svg class="mr-3 h-6 w-6 text-red-600 group-hover:text-white transition duration-200"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    <span class="font-medium">Logout</span>
                </button>
            </form>
        </div>
    </div>
</nav>

<!-- Overlay -->
<div id="overlay" class="fixed inset-0 backdrop-blur-sm bg-transparent z-30 hidden md:hidden"></div>

<!-- Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleButton = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('mobile-sidebar');
        const overlay = document.getElementById('overlay');
        const hamburger = document.querySelector('.hamburger');

        function toggleSidebar() {
            const isOpen = sidebar.classList.contains('translate-x-0');
            
            if (isOpen) {
                sidebar.classList.remove('translate-x-0');
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
                hamburger.classList.remove('active');
            } else {
                sidebar.classList.remove('hidden', '-translate-x-full');
                sidebar.classList.add('translate-x-0');
                overlay.classList.remove('hidden');
                hamburger.classList.add('active');
            }
        }

        function closeSidebar() {
            sidebar.classList.remove('translate-x-0');
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            hamburger.classList.remove('active');
        }

        toggleButton.addEventListener('click', function(e) {
            e.stopPropagation();
            toggleSidebar();
        });

        overlay.addEventListener('click', closeSidebar);

        document.addEventListener('click', function(e) {
            if (!sidebar.contains(e.target) && e.target !== toggleButton) {
                closeSidebar();
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === "Escape") {
                closeSidebar();
            }
        });
    });
</script>
