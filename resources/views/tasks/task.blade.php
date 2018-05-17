<div class="task">
    <div class="flex-center-parent">
        <div class="flex-center-child">
            <h3>{{ $task->title }}</h3>
        </div>
        <button id="edit-task" class="hide"></button>
    </div>
    <div class="task-content">
        <p class="note-description">{{ $task->description }}</p>
    </div>
</div>