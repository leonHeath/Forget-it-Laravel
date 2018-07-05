
require('./bootstrap');

//let $currentTask;
let task_id;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});

//Fills modal with fields from database
function fillFields(task){
    $('#edit-task-form').attr('action', '/tasks/'+ task_id);
    $('#modal-task-title').val(task.title);
    $('#modal-task-desc').val(task.description);
}

//Set task ID according to edit button clicked
function setTaskId(current){
    task_id = current.siblings('.task-id').val();
}

//Send ajax call to fill form data
function fillTaskInfo(){
    $.ajax({
        type: 'GET',
        url: '/tasks/' + task_id
    })
    .done (function(data) {
    let task = JSON.parse(data);
    console.log(task);
    fillFields(task);
    });
}

/*
 * Edit Task
 *
 * On clicking edit-task:
 * Modal is shown with values shown
 */
$('.edit-task').on("click", function(e){
    e.preventDefault();
    setTaskId($(this));

    $('#edit-task-modal').modal('show');

    fillTaskInfo();
});

//Get values from form and return as JSON string

function getFieldValues(){
    let taskValues = {title : $('#modal-task-title').val(),
        description : $('#modal-task-desc').val()};
    console.log(JSON.stringify(taskValues));
    return JSON.stringify(taskValues);
}
/*
function getNewTaskValues() {
    return new FormData(document.getElementById('edit-task-form'));
}
*/
/*
 * Save Task
 *
 * On clicking save-task
 * Task fields are saved to the database
 * Modal hides
 */

/*
$('#save-task').on("click", function(e){
    e.preventDefault();
    console.log('Clicked save');
    console.log(task_id);
    $.ajax({
        type: 'PATCH',
        url: '/tasks/' + task_id,
        data: getFieldValues()
    })
    .done(function() {
        $('#edit-task-modal').modal('hide');
    });

});
*/

/*
$('#save-task').on("click", function(e){
    e.preventDefault();
    console.log('Clicked save');
    console.log(task_id);
    $.ajax({
        type: 'PATCH',
        url: '/tasks/' + task_id,
        data: getNewTaskValues(),
        processData: false,
        contentType: false,
    })
    .done(function() {
        $('#edit-task-modal').modal('hide');
    });

});
*/