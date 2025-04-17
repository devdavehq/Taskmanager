<div class="w-full px-6 py-10">
    <div class="w-full  mx-auto border-b border-none pb-6  rounded-lg bg-white p-5">
        <div class="flex items-start justify-between flex-wrap gap-4 mb-6">
            <div>
                <h2 class="text-3xl font-semibold text-gray-900">{{ $task->title }}</h2>
                <p class="text-sm text-gray-500">Task ID: {{ $task->id }}</p>
            </div>
            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')
                @php
                $statusOptions = [
                'pending' => 'Pending',
                'completed' => 'Completed',
                ];
                @endphp

                <div class="w-32">
                    <label for="status" class="font-medium text-gray-800">Status</label>
                    <select id="status" name="status" class="mt-1 block w-full p-4 rounded-md border-gray-900 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                        @foreach($statusOptions as $key => $value)
                        <option value="{{ $key }}" {{ $task->status == $key ? 'selected' : '' }}>{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
        </div>



        <div class="grid sm:grid-cols-2 gap-6 mb-8 text-sm text-gray-600">
            <div>
                <label for="title" class="font-medium text-gray-800">Task Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $task->title) }}" class=" mt-1 p-3 block w-full shadow-sm rounded-md border-gray-900  sm:text-sm" required>
            </div>
            <div>
                <label for="due_date" class="font-medium text-gray-800">Due Date</label>
                <input type="date" id="due_date" name="due_date" value="{{ old('due_date', $task->due_date->format('Y-m-d')) }}" class=" border-gray-900 mt-1 p-3 block w-full rounded-md  shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
        </div>

        <div class="mb-6">
            <label for="description" class="font-medium text-gray-800">Description</label>
            <textarea id="description" name="description" rows="4" class="mt-1 block w-full p-3 rounded-md border-gray-900 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>{{ old('description', $task->description) }}</textarea>
        </div>

        <div class="flex flex-wrap justify-end gap-3">
            <a href="{{ route('task.tasks') }}" class="px-5 py-2 text-sm font-medium bg-gray-200 hover:bg-gray-300 rounded-lg transition duration-200 ease-in-out">
                Cancel
            </a>

            <button type="submit" class="p-3 text-sm bg-black text-white hover:bg-gray-800 rounded-xl transition duration-200 ease-in-out">
                Save Changes
            </button>
        </div>
        </form>
    </div>
</div>