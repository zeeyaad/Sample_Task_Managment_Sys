<x-layout>
    <h2>Edit Task</h2>
    <form action="{{ route('Tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Task Name:</label>
        <input type="text" name="name" value="{{ old('name', $task->name) }}" required>
        <label for="description">Description:</label>
        <input type="text" name="description" value="{{ old('description', $task->description) }}">
        <label for="due_date">Due Date:</label>
        <input type="date" name="due_date" value="{{ old('due_date', $task->due_date) }}">
        <label for="priority">Priority:</label>
        <select name="priority" required>
            <option value="low" @if(old('priority', $task->priority)==='low') selected @endif>Low</option>
            <option value="medium" @if(old('priority', $task->priority)==='medium') selected @endif>Medium</option>
            <option value="high" @if(old('priority', $task->priority)==='high') selected @endif>High</option>
        </select>
        <button type="submit" class="btn mt-4">Update Task</button>
    </form>
    <a href="{{ route('Tasks.index') }}" class="btn mt-4">Back to Tasks</a>
</x-layout>
