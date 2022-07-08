<!DOCTYPE html>
<html>
<h1>Birdboard</h1>
<a href="/projects/create">Create Project</a>

@forelse ($projects as $project)
<article>
    <h1> <a href="{{ $project->path() }}">{{ $project->title }}</a> </h1>
    <p> {{ $project->description }} </p>

</article>
@empty
<p>No Projects Yet...</p>
@endforelse

</html>
