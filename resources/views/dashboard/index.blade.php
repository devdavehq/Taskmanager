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
                <h1 class="text-3xl text-gray-700 p-5 md:ml-4 ml-0 font-bold mt-5">Welcome, {{ Auth::user()->name }}!</h1>

                <!-- Stats and Content -->
                @include('dashboard.partials.main')

            </main>
        </div>
    </div>

    <!-- Success/Error Notification -->
    @include('dashboard.partials.notification')
</x-app>