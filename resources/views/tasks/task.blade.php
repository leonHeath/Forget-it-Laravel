<div class="task">
    <div class="task-header">
        <input type="hidden" id="note_id" name="note_id" value=' + ret_tasks[x].task_id + '>
        <div class="task-title">
            <h3>{{ $task->title }}</h3>
        </div>
        <button id="edit-task" class="hide"></button>
    </div>
    <div class="note-content">
        <p class="note-description">{{ $task->description }}}</p>
    </div>
</div>