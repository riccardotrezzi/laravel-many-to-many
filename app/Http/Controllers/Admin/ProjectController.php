<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//model
use App\Models\Project;

//HELPERS
use Illuminate\Support\Facade\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:128|min:3',
            'description' => 'required|max:4096|min:3',
            'img' => 'nullable|max:2048|image',
            'project_date' => 'nullable|date',
            'project_type' => 'required|max:32|min:3',
        ]);

        $data = $request->all();
        $project = new Project();
        $project->title = $data['title'];
        $project->description = $data['description'];
        $project->img = $data['img'];
        $project->project_date = $data['project_date'];
        $project->project_type = $data['project_type'];
        $project->save();

        $project = Project::create($data);


        $imgPath = Storage::put('uploads', $data['img']);
        $data['img'] = $imgPath;

        return redirect()->route('admin.project.show', ['project' => $project->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project = Project::findOrFail($id);
        $data = $request->all();
        
        $project->title = $data['title'];
        $project->description = $data['description'];
        $project->img = $data['img'];
        $project->project_date = $data['project_date'];
        $project->project_type = $data['project_type'];
        $project->save();

        $project->update($data);

        return redirect()->route('admin.project.show', ['project' => $project->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
