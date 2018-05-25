<div class="task">
    <div class="flex-center-parent task-header">
        <div>
            <h4>{{ $task->title }}</h4>
            <input type="hidden" id="task_id" name="task_id" value={{ $task->id }}>
        </div>
        <button class="edit-task" data-toggle="modal" data-target="#edit-task-modal"></button>
    </div>
    <div class="task-content">
        <p class="note-description">{{ $task->description }}</p>
    </div>
</div>