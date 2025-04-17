<script>
    document.addEventListener('DOMContentLoaded', function() {
        const openButtons = document.querySelectorAll('#open-task-form, #open-task-form-empty');
        const closeButton = document.getElementById('close-modal');
        const cancelButton = document.getElementById('cancel-modal');
        const modalContainer = document.getElementById('modal-container');
        const modalPanel = document.getElementById('modal-panel');
        const modalBackdrop = document.getElementById('modal-backdrop');

        function openModal() {
            // Show container and backdrop
            modalContainer.classList.remove('hidden');
            setTimeout(() => {
                modalBackdrop.classList.remove('opacity-0');
                modalPanel.classList.remove('translate-x-full');
            }, 20);
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            // Animate out
            modalBackdrop.classList.add('opacity-0');
            modalPanel.classList.add('translate-x-full');

            // Hide after animation completes
            setTimeout(() => {
                modalContainer.classList.add('hidden');
                document.body.style.overflow = '';
            }, 300);
        }

        // Event listeners
        openButtons.forEach(btn => btn.addEventListener('click', openModal));
        if (closeButton) closeButton.addEventListener('click', closeModal);
        if (cancelButton) cancelButton.addEventListener('click', closeModal);
        if (modalBackdrop) modalBackdrop.addEventListener('click', closeModal);

        // Close on successful form submission
        document.body.addEventListener('htmx:afterSwap', function(evt) {
            if (evt.detail.target.id === 'tasks-container' && evt.detail.successful) {
                closeModal();
            }
        });

        // Close on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !modalContainer.classList.contains('hidden')) {
                closeModal();
            }
        });



       
    });
</script>