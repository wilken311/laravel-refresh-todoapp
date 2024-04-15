<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-normal items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Todo') }}
            </h2>
            <a href="{{route('todos.create')}}" >
                <x-primary-button  class="ms-3">
                        {{ __('Create') }}
                </x-primary-button>
            </a>
        <div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        <table class="w-full table-fixed hover:table-fixed border-separate border-spacing-2 border border-slate-500">
                            <thead>
                                <tr>
                                <th class="border border-slate-600">Title</th>
                                <th class="border border-slate-600">Description</th>
                                <th class="border border-slate-600">CreatedAt</th>
                                <th class="border border-slate-600">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($todos->count())
                                    @foreach ( $todos as $todo )
                                    <tr>
                                        <td class="border border-slate-700">{{$todo->title}}</td>
                                        <td class="border border-slate-700">{{$todo->description}}</td>
                                        <td class="border border-slate-700">{{$todo->created_at}}</td>
                                        <td class="border border-slate-700">
                                            <a href="{{ route('todos.show', $todo->id) }}">View</a> |
                                            <a href="{{ route('todos.edit', $todo->id) }}">Edit</a> | 
                                            <form action="{{ route('todos.destroy', $todo->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>    
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
