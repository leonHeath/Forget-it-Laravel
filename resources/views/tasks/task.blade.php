<div class="task">
    <div class="flex-center-parent task-header header">
        <div class="task-title">
            <h4>{{ $task->title }}</h4>
        </div>
        <form>
            <button class="edit-task"></button>
            <input type="hidden" class="task-id" name="task_id" value={{ $task->id }}>
        </form>

    </div>
    <div class="task-content">
        <p class="note-description">{{ $task->description }}</p>
    </div>
</div>