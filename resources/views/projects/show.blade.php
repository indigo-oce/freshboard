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
        <div class="card">
            <div class="card-title">
                <p> task 1 </p>
            </div>
        </div>

        <div class="card">
            <div class="card-title">
                <p> task 2 </p>
            </div>
        </div>
    </div>
</x-app-layout>
