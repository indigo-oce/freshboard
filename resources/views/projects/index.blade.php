<!DOCTYPE html>
<html>
<h1>Birdboard</h1>

@foreach ($projects as $project)
<article>
    <h1> <a href="{{ $project->path() }}">{{ $project->title }}</a> </h1>
    <p> {{ $project->description }} </p>

</article>
@endforeach

</html>
