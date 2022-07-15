@props(['goal'])

<div class="flex">
    <li>{{ $goal->title }}</li>

    <form action="/goals/{{$goal->id}}/delete" method="POST" class="text-red-600 ml-2">
        @csrf
        <button type="submit">Delete</button>
    </form>

    <a href="/goals/{{$goal->id}}/edit" class="ml-2">Edit</a>
</div>
