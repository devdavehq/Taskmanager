@if(count($tasks) > 0)
<div id="tasks-container" class="w-full overflow-x-auto">
    <div class="flex flex-nowrap gap-6 p-6" style="min-width: min-content">
        @foreach($tasks as $task)
        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow duration-300 flex-shrink-0" style="width: 300px;">
            <!-- Task Header -->
            <div class="px-4 py-3 bg-gray-50 border-b border-gray-200 flex justify-between items-center">
                <span class="text-sm font-medium text-gray-500">Task #{{ $task->id }}</span>
                <div class="flex space-x-2">
                    <!-- Preview Button -->
                    <button class="text-gray-400 hover:text-blue-500 focus:outline-none" title="Preview" onclick="previewTask({{ $task->id }})">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <!-- Edit Button -->
                    <button class="text-gray-400 hover:text-green-500 focus:outline-none" title="Edit" onclick="editTask({{ $task->id }})">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                        </svg>
                    </button>
                    <!-- Delete Button -->
                    <button class="text-gray-400 hover:text-red-500 focus:outline-none" title="Delete" onclick="deleteTask({{ $task->id }})">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Task Content -->
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $task->title }}</h3>
                <p class="text-gray-600 text-sm mb-4">{{ $task->description }}</p>

                <!-- Due Date -->
                <div class="flex items-center text-sm text-gray-500 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Due: <span class="font-medium ml-1 @if($task->isOverdue()) text-red-600 @endif">
                        {{ $task->due_date->format('M d, Y') }}
                    </span>
                </div>

                <!-- Status -->
                <div class="flex items-center text-sm mt-3">
                    @php
                    $statusClasses = [
                    'pending' => 'bg-yellow-100 text-yellow-800',
                    'completed' => 'bg-green-100 text-green-800',
                    ];
                    $statusText = [
                    'pending' => 'Pending',
                    'completed' => 'Completed',
                    ];
                    @endphp
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $statusClasses[$task->status] }}">
                        {{ $statusText[$task->status] }}
                    </span>
                    <!-- <span class="ml-auto text-gray-500">{{ $task->progress }}%</span> -->
                </div>
                <!-- <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                    <div class="h-2 rounded-full 
                            @if($task->status === 'completed') bg-green-600
                            @else bg-yellow-600 @endif"
                        style="width: {{ $task->progress }}%">
                    </div>
                </div> -->
            </div>

            <!-- Task Footer -->
            <div class="px-4 py-3 bg-gray-50 border-t border-gray-200 text-right">
                <a href="{{ route('tasks.show', $task) }}" class="text-sm font-medium text-gray-600 hover:text-gray-900 focus:outline-none">
                    View Details →
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
<div class="text-center py-12">
    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
    </svg>
    <h3 class="mt-2 text-sm font-medium text-gray-900">No tasks found</h3>
    <p class="mt-1 text-sm text-gray-500">Get started by creating a new task.</p>
    <div class="mt-6">
        <button id="open-task-form-empty" class="inline-flex items-center rounded-md bg-gray-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
            Add Task
        </button>
    </div>
</div>
@endif