<div class="py-7">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 mb-8">
            <!-- Total Tasks -->
            <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                <dt class="truncate text-sm font-medium text-gray-500">Total Tasks</dt>
                <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ count($tasks) }}</dd>
            </div>
            <!-- Completed Tasks -->
            <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                <dt class="truncate text-sm font-medium text-gray-500">Completed</dt>
                <dd class="mt-1 text-3xl font-semibold tracking-tight text-green-600">{{ $completedCount ?? 0 }}</dd>
            </div>
            <!-- In Progress -->
            <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                <dt class="truncate text-sm font-medium text-gray-500">In Progress</dt>
                <dd class="mt-1 text-3xl font-semibold tracking-tight text-yellow-600">{{ $inProgressCount ?? 0 }}</dd>
            </div>
        </div>

        <!-- Tasks Container -->
        <div class="bg-white shadow rounded-lg overflow-hidden mb-8">
            <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Your Tasks</h3>
            </div>
            @if(count($tasks) > 0)
            <!-- Vertical Scrolling Container -->
            <div class="w-full overflow-y-auto" style="max-height: 60vh;">
                <div class="grid grid-cols-1 gap-4 p-4">
                    @foreach($tasks as $task)
                    <!-- Individual Task Block -->
                        @include('dashboard.partials.card', ['task' => $task])
                    @endforeach
                </div>
            </div>
            @else
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900">No tasks found</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new task.</p>
                <div class="mt-6">
                    <a href="{{ route('tasks.create') }}" class="inline-flex items-center rounded-md bg-gray-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Add Task
                    </a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>