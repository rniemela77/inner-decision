<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Goals') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ol>
                        @foreach ($goals as $goal)
                            <li>{{ $goal->title }}</li>

                            <form action="/goals/{{$goal->id}}/delete" method="POST">
                                @csrf
                                <button type="submit">Delete</button>
                            </form>
                        @endforeach
                        {{--<li>Task 1 - EASY</li>--}}
                    </ol>

{{--                    <h1>Duke's Goals</h1>--}}
{{--                    <ul>--}}
{{--                        <li>Task 1</li>--}}
{{--                        <li>Task 2</li>--}}
{{--                        <li>Task 3</li>--}}
{{--                    </ul>--}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
