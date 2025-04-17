<header class="sticky top-0 z-10 bg-white shadow-sm">
    <div class="px-4 py-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:leading-9">
                {{ $page === 'task' ? 'View Tasks' : ($page === 'dashboard' ? 'Task Management' : 'Preview') }}
            </h1>
            <div class="flex items-center space-x-4">
            </div>
        </div>
        
    </div>
</header>