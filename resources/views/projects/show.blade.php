<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <x-nav-link class="font-semibold text-xl text-gray-700 leading-tight" href="/projects"> Projects
            </x-nav-link> / {{ $project->title }}
        </h2>
    </x-slot>

    <div class="subheader">
        <div class="main">
            <p class="px-6 text-gray-600"> {{ $project->description }} </p>
        </div>
    </div>

    <div class="main">
        @foreach ($project->tasks as $task)
        <form method="post" action="{{ $task->path() }}">
            @method('PATCH')
            @csrf

            <div class="card flex items-center">
                <input name="completed" type="checkbox" class="mr-2" onChange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
                <input name="body" value="{{$task->body}}" class="w-full w-full py-2 rounded-lg border-2 border-gray-100 focus:border-indigo-300 {{$task->completed ? 'text-gray-400' : ''}}">
            </div>
        </form>
        @endforeach
        <div class="card">
            <form action="{{ $project->path() . '/tasks' }}" method="post">
                @csrf
                <input name="body" placeholder="add a task, then hit return" class="w-full py-2 rounded-lg border-2 border-gray-100 focus:border-indigo-300">
            </form>
        </div>
        <form method="post" action="{{$project->path()}}">
            @csrf
            @method('PATCH')
            <div class="mt-6 card">
                <textarea name="notes" class="w-full py-2 rounded-lg border-2 border-gray-100 focus:border-indigo-300" style="min-height: 200px" placeholder="General Notes..." value="">{{ $project->notes }}</textarea>
            <x-button class="mt-2">Save</x-button>
            </div>
        </form>
    </div>
</x-app-layout>
