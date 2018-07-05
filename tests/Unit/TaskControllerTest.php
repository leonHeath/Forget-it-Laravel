<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\http\Controllers\TaskController;
use App\User;

class TaskControllerTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test store method
     *
     * @return void
     */

    public function test_creates_tasks(){
        //Set User as current user
        $user = factory(User::class)->create();
        $this->actingAs($user);

        $task = new TaskController();
        $task->store();
        //Assert new task in DB
        $this->assertDatabaseHas('tasks', [
            'title' => "Default Task",
            'description' => "Write task description here",
            'user_id' => $user->id
        ]);
    }
}
