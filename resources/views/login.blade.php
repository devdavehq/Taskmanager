<x-app>
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-[400px]">
            <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 border border-slate-200">
                <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Login</h2>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Error List Display -->
                    @if ($errors->any())
                    <div class="mb-6 bg-red-100 border border-red-300 text-red-800 p-4 rounded-md shadow-sm">
                        <div class="flex items-start space-x-2">
                            <!-- Error Icon -->
                            <svg class="w-5 h-5 mt-1 text-red-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M12 2a10 10 0 1010 10A10 10 0 0012 2z" />
                            </svg>

                            <ul class="list-none text-sm space-y-1">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif

                    <!-- Email Field -->
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input class="border border-slate-300 rounded w-full py-2 px-3 text-gray-700 focus:border-slate-400 focus:shadow-none @error('email') border-red-500 @enderror"
                            id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email">

                    </div>

                    <!-- Password Field -->
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input class="border border-slate-300 rounded w-full py-2 px-3 text-gray-700 focus:border-slate-400 focus:shadow-none @error('password') border-red-500 @enderror"
                            id="password" type="password" name="password" placeholder="••••••••">

                    </div>

                    <!-- Submit Button -->
                    <div class="mb-4">
                        <button class="w-full cursor-pointer bg-black text-white font-bold py-2 px-4 rounded hover:bg-gray-800 active:bg-gray-900 transition-colors"
                            type="submit">
                            Sign In
                        </button>
                    </div>
                </form>

                <!-- Link to Register -->
                <p class="text-center text-gray-500 text-sm">
                    Don't have an account? <a href="{{ route('register') }}" class="text-black hover:text-gray-700 font-medium underline">Sign up</a>
                </p>
            </div>
        </div>
    </div>
</x-app>