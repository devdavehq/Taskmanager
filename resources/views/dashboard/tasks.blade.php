<x-app>
    <!-- Main Dashboard Container -->
    <div class="min-h-screen bg-gray-100 flex">
        <!-- Sidebar (hidden on mobile) -->
        @include('dashboard.partials.sideBar')

        <div class="flex-1 flex flex-col overflow-hidden" id="task">
            <!-- Main Content -->
            <main class="flex-1">
                <!-- Page header -->
                @include('dashboard.partials.header', [ 'page' => 'task'])

                @if (count($tasks) > 0)
                    <div class="flex items-center justify-end pb-2 w-full ">
                        <div class="mt-3 mr-7">
                            <button id="open-task-form-empty" class="inline-flex items-center rounded-md bg-gray-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                                Add Task
                            </button>
                        </div>
                    </div>
                @endif
                
                <!-- Stats and Content -->
                @include('dashboard.partials.taskCard')

            </main>
        </div>
    </div>

    <!-- Task Form Modal (initially hidden) -->
    @include('dashboard.partials.taskForm')


    <!-- Success/Error Notification (hidden by default) -->
    @include('dashboard.partials.notification')


    <!-- Script to handle modal and notifications -->
    @include('dashboard.partials.script')

</x-app>