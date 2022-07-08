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
            <div class="grid grid-cols-3">
                @forelse ($projects as $project)
                <div class="bg-white m-4 p-3 h-64 rounded shadow">
                    <x-nav-link href="{{ $project->path() }}">
                        <h1 class="py-2 -ml-4 border-l-4 border-x-indigo-600 pl-4 font-semibold text-xl text-gray-800 leading-tight">
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
    </div>
</x-app-layout>
