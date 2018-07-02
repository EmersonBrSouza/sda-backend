<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    protected function createProject (Request $request) {
        $data = $request->only(['title', 'createdAt', 'manager']);

        Project::create([
            'title' => $data['title'],
            'team' => [],
            'views' => 0,
            'isPublished' => false,
            'createdAt' => $data['createdAt'],
            'lastUpdate' => $data['createdAt'],
            'history' => [],
            'manager' => $data['manager']
        ]);

        response()->json(['success' => true]);
    }
}
