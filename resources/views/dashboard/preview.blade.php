<x-app>
    <!-- Main Dashboard Container -->
    <div class="min-h-screen bg-gray-100 flex">
        <!-- Sidebar (hidden on mobile) -->
        @include('dashboard.partials.sideBar')

        <div class="flex-1 flex flex-col overflow-hidden" id="task">
            <!-- Main Content -->
            <main class="flex-1">
                <!-- Page header -->
                @include('dashboard.partials.header', [ 'page' => 'preview'])

               
                
                <!-- Stats and Content -->
                @include('dashboard.partials.preview', [ 'page' => $task])

            </main>
        </div>
    </div>

    <!-- Task Form Modal (initially hidden) -->


    <!-- Success/Error Notification (hidden by default) -->


    <!-- Script to handle modal and notifications -->

</x-app>