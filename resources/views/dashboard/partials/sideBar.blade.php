<nav class="hidden md:flex md:w-64 md:flex-col bg-gray-900">
    <div class="flex min-h-0 flex-1 flex-col">
        <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
            <!-- Logo / App Name -->
            <div class="flex flex-shrink-0 items-center px-4">
                <svg class="h-8 w-8 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
                <h1 class="ml-2 text-white text-xl font-bold">Task Manager</h1>
            </div>

            <!-- Navigation Links -->
            <nav class="mt-5 flex-1 space-y-1 px-2">
                <!-- Dashboard -->
                <a href="{{ route('tasks.index') }}" class="text-gray-300 hover:bg-gray-800 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>

                
                <!-- Tasks -->
                <a href="{{ route( 'task.tasks') }}" class="text-gray-300 hover:bg-gray-800 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    My Tasks
                </a>

                
            </nav>
        </div>
       

        <!-- Bottom Section (Logout) -->
        <div class="flex-shrink-0 flex border-t border-gray-700 p-4">
            <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="group flex items-center w-full text-gray-300 hover:text-white">
                <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                Logout
            </a>
            <form id="logout-form" action="" method="POST" class="hidden">
                @csrf
            </form>
        </div>
    </div>
</nav>