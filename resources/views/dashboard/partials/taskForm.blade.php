<!-- Simplified Modal Implementation -->
<div id="modal-container" class="fixed inset-0 z-50 hidden">
    <!-- Backdrop -->
    <div id="modal-backdrop" 
         class="fixed inset-0 bg-transparent bg-opacity-50 transition-opacity duration-300 opacity-0"
         aria-hidden="true"
         style="backdrop-filter: blur(3px);"></div>
    
    <!-- Modal Panel -->
    <div id="modal-panel"
         class="fixed right-0 top-0 h-full w-full max-w-md bg-white shadow-xl transform transition-transform duration-300 ease-in-out translate-x-full">
        <div class="h-full overflow-y-auto p-6">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-medium text-gray-900">Add New Task</h3>
                <button id="close-modal" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Close</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            

               <!-- Error Message Container -->
        <div id="form-errors" class="mb-4 @if(!$errors->any()) hidden @endif">
            <div class="rounded-md bg-red-50 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <!-- <div class="ml-3"> -->
                        @if($errors->any())
                            <ul class="px-2 py-2">
                                @foreach ($errors->all() as $error)
                                    <li class="my-2 text-red-500">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    <!-- </div> -->
                </div>
            </div>
        </div>
            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <!-- Form fields remain the same -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-black focus:border-black" value="{{ old('title') }}">
                    </div>
                    
                    <!-- Other form fields... -->
                    <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-black focus:border-black" >{{ old(key: 'description') }}</textarea>
                </div>
                
                <div>
                    <label for="due_date" class="block text-sm font-medium text-gray-700">Due Date</label>
                    <input type="date" name="due_date" id="due_date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-black focus:border-black" value="{{ old(key: 'due_date') }}">
                </div>
                
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" id="status" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-black focus:border-black">
                        <option value="pending">Pending</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
                    <div class="flex justify-end space-x-3">
                        <button type="button" id="cancel-modal" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                            Cancel
                        </button>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                            Save Task
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Backdrop (hidden by default) -->
<div id="task-form-backdrop" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>