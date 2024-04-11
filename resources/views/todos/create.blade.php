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
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex">
                    <form method="POST" action="{{ route('todos.store') }}">
                        @csrf
                        <!-- Title -->
                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"  />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                         <!-- Description -->
                         <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')"  />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>


                        <x-primary-button class="ms-3">
                            {{ __('Submit') }}
                        </x-primary-button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
