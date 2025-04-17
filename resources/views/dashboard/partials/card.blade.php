
    
    <div id="tasks-container" class="w-full ">
        <div class="flex flex-nowrap gap-6 p-2">
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow duration-300 flex-shrink-0" style="width: 100%;">
                <!-- Task Header -->
                <div class="px-4 py-3 bg-gray-50 border-b border-gray-200 flex justify-between items-center">
                    <span class="text-sm font-medium text-gray-500">Task #{{ $task->id }}</span>
                    <div class="flex space-x-2">
                        <!-- Preview Button -->
                       
                        <!-- Edit Button -->
                       
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
            
        </div>
    </div>
    
