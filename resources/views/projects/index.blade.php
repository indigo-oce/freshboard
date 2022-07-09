<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <div class="mr-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Freshboard') }}
                </h2>
            </div>
            <div>
                <x-nav-link href="/projects/create">Create Project</x-nav-link>
            </div>
        </div>
    </x-slot>

    <div class="main">
        <div class="grid grid-cols-3">
            @forelse ($projects as $project)
            <div class="card h-64">
                <x-nav-link class="px-0 pt-0" href="{{ $project->path() }}">
                    <h1 class="card-title">
                        {{ $project->title }}
                    </h1>
                </x-nav-link>
                <p> {{ mb_strimwidth($project->description, 0, 250) }} </p>
            </div>
            @empty
            <div>
                <p>No Projects Yet...</p>
            </div>
            @endforelse
        </div>
    </div>
</x-app-layout>
