<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sortFields = request('sort_fields', 'created_at');
        $sortDirection = request('sort_direction', 'desc');

        // common query for all projects. further filtering can be done
        $query = Project::query();

        if (request()->has('name')){
            $query->where('name', 'like', '%' . request('name') . '%');
        }

        if(request()->has('status')){
            $query->where('status', request('status'));
        }

        $projects = $query
                        ->orderBy($sortFields, $sortDirection)
                        ->paginate(10)
                        ->onEachSide(1);
        return inertia('Projects/Index', [
            'projects'      => ProjectResource::collection($projects),
            // return the query string parameters
            // wil be used in searchFieldChanged method in the React component
            'queryParams'   => request()->query()?: null, // if empty return null
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
