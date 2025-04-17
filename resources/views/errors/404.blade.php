    <x-layout>
    <!-- Coming Soon Page -->
    <div class="min-h-screen bg-gradient-to-br from-blue-900 to-purple-800 flex flex-col items-center justify-center p-6 text-center text-white">
        <!-- Animated Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-20">
            <div class="absolute top-20 left-10 w-32 h-32 rounded-full bg-blue-500 filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-10 right-10 w-40 h-40 rounded-full bg-purple-600 filter blur-3xl animate-pulse delay-300"></div>
        </div>

        <!-- Main Content -->
        <div class="relative z-10 max-w-2xl mx-auto">
            <!-- Logo/Icon -->
            <div class="mb-8">
                <svg class="w-20 h-20 mx-auto text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                </svg>
            </div>

            <!-- Heading -->
            <h1 class="text-4xl md:text-5xl font-bold mb-4 tracking-tight">Task Manager</h1>
            <p class="text-xl md:text-2xl text-blue-100 mb-8">We're launching something amazing soon!</p>

            <!-- Countdown (optional) -->
            <div class="flex justify-center gap-4 mb-12">
                <div class="bg-white bg-opacity-10 rounded-lg p-4 w-20">
                    <div class="text-3xl font-bold">07</div>
                    <div class="text-sm opacity-80">Days</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4 w-20">
                    <div class="text-3xl font-bold">23</div>
                    <div class="text-sm opacity-80">Hours</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4 w-20">
                    <div class="text-3xl font-bold">45</div>
                    <div class="text-sm opacity-80">Minutes</div>
                </div>
            </div>

            <!-- Dashboard Access Button -->
            <a href="/dashboard" class="inline-flex items-center px-8 py-4 bg-white text-blue-900 font-bold rounded-full text-lg hover:bg-blue-100 transition-all transform hover:scale-105 shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                Go to Dashboard
            </a>

            <!-- Social Links (optional) -->
            <div class="mt-12 flex justify-center space-x-6">
                <a href="#" class="text-blue-200 hover:text-white">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                    </svg>
                </a>
                <a href="#" class="text-blue-200 hover:text-white">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

</x-layout>