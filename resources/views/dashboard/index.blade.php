<x-app>
    <!-- Main Dashboard Container -->
    <div class="min-h-screen bg-gray-100 flex">
        <!-- Sidebar -->
        @include('dashboard.partials.sideBar', [ 'page' => 'dashboard'])

        <div class="flex-1 flex flex-col overflow-hidden " id="dash">
            <!-- Main Content -->
            <main class="flex-1">
                <!-- Page header -->
                @include('dashboard.partials.header', [ 'page' => 'dashboard'])

                <!-- Stats and Content -->
                @include('dashboard.partials.main')

            </main>
        </div>
    </div>

    <!-- Success/Error Notification -->
    @include('dashboard.partials.notification')
</x-app>