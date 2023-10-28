@foreach ($tasks as $task)
    <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a><br>
@endforeach