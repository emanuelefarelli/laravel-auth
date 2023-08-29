    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row col-12">
            <div class="card">
                <div class="card-header">
                    <h1>
                        {{ $project->title }}
                    </h1>
                </div>
                <div class="card-body">
                    <h3 class="card-title">
                        Group Name: {{ $project->group_name }}
                    </h3>
                    <p>
                        {{ $project->description }}
                    </p>
                    <h3>
                        Final score:
                    </h3>
                    <p>
                        {{ $project->final_score }}
                    </p>
                    <h4>
                        Started At:
                    </h4>
                    <p>
                        {{ $project->started_at }}
                    </p>
                    <h4>
                        Finished At:
                    </h4>
                    <p>
                        {{ $project->finished_at }}
                    </p>
                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">
                        Edit
                    </a>
                    <a href="#" class="btn btn-danger">
                        Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection