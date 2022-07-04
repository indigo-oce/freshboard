<!DOCTYPE html>
<html>
<h1>Birdboard</h1>

@foreach ($projects as $project)
<article>
    <h1> {{ $project->title }} </h1>
    <p> {{ $project->description }} </p>

</article>
@endforeach

</html>
