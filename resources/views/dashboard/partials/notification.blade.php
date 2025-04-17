@if(session('status'))
<div id="notification" class="fixed top-4 right-4 z-50 opacity-0 translate-y-[-20px] transition-all duration-500 ease-out p-7">
    <div class="rounded-md bg-green-50 p-4 shadow-lg">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-green-800">{{ session('status') }}</p>
            </div>
        </div>
    </div>
</div>
@endif




<script>
    document.addEventListener('DOMContentLoaded', function () {
        const notification = document.getElementById('notification');
        if (notification) {
            // Animate in
            requestAnimationFrame(() => {
                notification.classList.remove('opacity-0', 'translate-y-[-20px]');
                notification.classList.add('opacity-100', 'translate-y-0');
            });

            // Animate out after 4 seconds
            setTimeout(() => {
                notification.classList.remove('opacity-100', 'translate-y-0');
                notification.classList.add('opacity-0', '-translate-y-2');
            }, 4000);
        }
    });
</script>
