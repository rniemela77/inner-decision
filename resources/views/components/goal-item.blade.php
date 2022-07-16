@props(['goal'])

<div class="flex">
    {{--  Goal Title / Editing  --}}
    <form action="/goals/{{ $goal->id }}" method="POST">
        @method('PUT')
        @csrf

        <input type="text" name="title" value="{{$goal->title}}" placeholder="do the thing"/>

        <button type="submit">Save</button>
    </form>

    {{--  Delete Goal  --}}
    <form action="/goals/{{$goal->id}}/delete" method="POST" class="text-red-600 ml-2">
        @csrf
        <button type="submit">Delete</button>
    </form>
</div>
