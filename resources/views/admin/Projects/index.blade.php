@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Group Name</th>
      <th scope="col">Started at</th>
      <th scope="col">Finished at</th>
      <th scope="col">Final score</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($projects as $project)
    <tr>
      <th scope="row"> {{ $project->id }} </th>
      <td> {{ $project->title }} </td>
      <td> {{ $project->description }} </td>
      <td> {{ $project->group_name }} </td>
      <td> {{ $project->started_at }} </td>
      <td> {{ $project->finished_at }} </td>
      <td> {{ $project->final_score }} </td>
      <td>
        <a href="{{ url('admin/projects/show') }}" class="btn btn-primary btn-sm">
            View
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $projects->links() }}
</div>
@endsection