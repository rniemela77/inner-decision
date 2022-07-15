<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Goal') }}
        </h2>
    </x-slot>

    <form action="/goals/{{ $goal->id }}" method="POST">
        @method('PUT')
        @csrf

        <input type="text" name="title" value="{{$goal->title}}" placeholder="do the thing" />

        <button type="submit">Save</button>
    </form>
</x-app-layout>
