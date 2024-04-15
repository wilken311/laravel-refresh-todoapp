<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-normal items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Todo') }}
            </h2>
            <x-primary-button class="ms-3">
                    {{ __('Create') }}
            </x-primary-button>
        <div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 w-full">
                    <div>
                        <div>ID: {{$todo->id}}</div>
                        <div>Title: {{$todo->title}}</div>
                        <div>Description: {{$todo->description}}</div>
                        <div>Created At: {{$todo->created_at}}</div>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
