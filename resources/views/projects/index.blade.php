<!DOCTYPE html>
<html>

<body>
    <h1>Freshboard</h1>
    <a href="/projects/create">Create Project</a>

    @forelse ($projects as $project)
    <article>
        <h1> <a href="{{ $project->path() }}">{{ $project->title }}</a> </h1>
        <p> {{ $project->description }} </p>
    </article>
    @empty
    <p>No Projects Yet...</p>
    @endforelse
</body>

</html>
