<div class="w-full px-6 py-10 bg-transparent">
    <div class="w-full max-w-6xl mx-auto border-b border-gray-300 pb-6">
        <div class="flex items-start justify-between flex-wrap gap-4 mb-4">
            <div>
                <h2 class="text-3xl font-bold text-gray-900">{{ $task->title }}</h2>
                <p class="text-sm text-gray-500">Task ID: {{ $task->id }}</p>
            </div>

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

            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $statusClasses[$task->status] }}">
                {{ $statusText[$task->status] }}
            </span>
        </div>

        <p class="text-gray-700 text-lg leading-relaxed mb-6">
            {{ $task->description }}
        </p>

        <div class="grid sm:grid-cols-2 gap-4 text-sm text-gray-600 mb-8">
            <p><span class="font-medium text-gray-800">Due Date:</span> {{ $task->due_date->format('M d, Y') }}</p>
            <p><span class="font-medium text-gray-800">Assigned By:</span> Admin</p>
        </div>

        <div class="flex flex-wrap justify-end gap-3">
            <a href="{{ route('task.tasks') }}" class="px-5 py-2 text-sm font-medium bg-gray-200 hover:bg-gray-300 rounded-lg">
                Back
            </a>

            <form action="{{ route('tasks.markAsDone', $task->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button class="px-4 py-2 text-sm bg-green-600 text-white hover:bg-green-700 rounded-xl">
                    Mark as Done
                </button>
            </form>

        </div>
    </div>
</div>