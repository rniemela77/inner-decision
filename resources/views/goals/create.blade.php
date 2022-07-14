<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Goal') }}
        </h2>
    </x-slot>

    <form action="/goals/new" method="POST">
        <label>I will...</label>
        <input type="text" name="title" placeholder="do the thing" />
    </form>
</x-app-layout>
