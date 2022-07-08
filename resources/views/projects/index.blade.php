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

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @forelse ($projects as $project)
            <x-nav-link href="{{ $project->path() }}">
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ $project->title }}
                </h1>
            </x-nav-link>
            <p> {{ $project->description }} </p>
            @empty
            <p>No Projects Yet...</p>
            @endforelse
        </div>
    </div>
</x-app-layout>
