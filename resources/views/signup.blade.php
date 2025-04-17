<x-app>
    <div class="min-h-screen  p-4">
        <div class="w-full max-w-[400px] mx-auto my-[100px]">
            <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 border border-slate-200">
                <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Create Account</h2>
                <form method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Full Name
                        </label>
                        <input class="border border-slate-300 rounded w-full py-2 px-3 text-gray-700 focus:border-slate-400 focus:shadow-none" 
                               id="name" type="text" name="name" placeholder="John Doe" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input class="border border-slate-300 rounded w-full py-2 px-3 text-gray-700 focus:border-slate-400 focus:shadow-none" 
                               id="email" type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input class="border border-slate-300 rounded w-full py-2 px-3 text-gray-700 focus:border-slate-400 focus:shadow-none" 
                               id="password" type="password" name="password" placeholder="••••••••" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">
                            Confirm Password
                        </label>
                        <input class="border border-slate-300 rounded w-full py-2 px-3 text-gray-700 focus:border-slate-400 focus:shadow-none" 
                               id="password_confirmation" type="password" name="password_confirmation" placeholder="••••••••" required>
                    </div>
                    <div class="mb-4">
                        <button class="w-full bg-black text-white font-bold py-2 px-4 rounded hover:bg-gray-800 active:bg-gray-900 transition-colors hover:cursor-pointer" 
                                type="submit">
                            Register
                        </button>
                    </div>
                </form>
                <p class="text-center text-gray-500 text-sm">
                    Already have an account? <a href="/" class="text-black hover:text-gray-700 font-medium underline">Login</a>
                </p>
            </div>
        </div>
    </div>
</x-app>