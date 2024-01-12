<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectsRepository;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    protected $projectRepository;
    public function __construct(ProjectsRepository $projectsRepository){
        $this->projectRepository = $projectsRepository; 
    }
    public function index(){
        $Projects = $this->projectRepository->index();
        return view('Projects.index', compact('Projects'));
    }
}