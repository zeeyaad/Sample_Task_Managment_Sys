<x-layout>
    <h2>Add a New Task</h2>
    <form action="{{ route('Tasks.store') }}" method="POST">
        @csrf
        <label for="name">Task Name:</label>
        <input type="text" name="name" required>
        <label for="description">Description:</label>
        <input type="text" name="description">
        <label for="due_date">Due Date:</label>
        <input type="date" name="due_date">
        <label for="priority">Priority:</label>
        <select name="priority" required>
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
        </select>
        <button type="submit" class="btn mt-4">Add Task</button>
    </form>

    <h2 class="mt-8">All Tasks</h2>
    <ul>
        @forelse($tasks as $task)
            <li class="mb-2 p-2 border-b flex items-center justify-between">
                <div>
                    <span class="font-bold">#{{ $loop->iteration }}</span>
                    <strong>{{ $task->name }}</strong><br>
                    <span>{{ $task->description }}</span><br>
                    <span>Due: {{ $task->due_date }}</span><br>
                    <span>Priority: {{ ucfirst($task->priority) }}</span><br>
                    <span class="text-xs text-gray-400">Created: {{ $task->created_at->format('Y-m-d H:i') }}</span>
                </div>
                <div>
                    <a href="{{ route('Tasks.edit', $task->id) }}" class="btn">Edit</a>
                </div>
            </li>
        @empty
            <li>No tasks found.</li>
        @endforelse
    </ul>
</x-layout>
