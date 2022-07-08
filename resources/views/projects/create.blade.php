<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Project
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="/projects">
                @csrf

                <div class="field">
                    <label class="label" for="title">Title</label>
                    <div class="control">
                        <input type="text" class="input" name="title" placeholder="Title">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="description">Description</label>
                    <div class="control">
                        <textarea name="description" class="textarea" placeholder="Description"></textarea>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <x-button type="submit" class="button is-link">Create Project</x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
