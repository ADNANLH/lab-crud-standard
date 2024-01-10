<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TasksRepository;

class TasksController extends Controller
{
    protected $tasksRepository;
    public function __construct(TasksRepository $tasksRepository)
    {
        $this->tasksRepository = $tasksRepository;
        
    }
    public function index(){
        $tasks = $this->tasksRepository->index();
        return view('Tasks.index');
    }
    
}
