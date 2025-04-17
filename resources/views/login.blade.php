<x-app>
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-[400px]">
            <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 border border-slate-200">
                <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Login</h2>
                <form method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input class="border border-slate-300 rounded w-full py-2 px-3 text-gray-700 focus:border-slate-400 focus:shadow-none" 
                               id="email" type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input class="border border-slate-300 rounded w-full py-2 px-3 text-gray-700 focus:border-slate-400 focus:shadow-none" 
                               id="password" type="password" name="password" placeholder="••••••••" required>
                    </div>
                    <div class="mb-4">
                        <button class="w-full cursor-pointer bg-black text-white font-bold py-2 px-4 rounded hover:bg-gray-800 active:bg-gray-900 transition-colors" 
                                type="submit">
                            Sign In
                        </button>
                    </div>
                </form>
                <p class="text-center text-gray-500 text-sm">
                    Don't have an account? <a href="/register" class="text-black hover:text-gray-700 font-medium underline">Sign up</a>
                </p>
            </div>
        </div>
    </div>
</x-app>