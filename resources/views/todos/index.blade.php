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
    <div class="p-4">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Welcome to your new Todo app</h1>
        <p class="text-gray-600 dark:text-gray-400">This is a simple boilerplate to get you started with Laravel and Tailwind CSS.</p>
    </div>
</x-app-layout>
