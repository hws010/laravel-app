<x-layout title="idea {{ $idea->id }}">
    <h1 class="text-3xl font-bold mb-4">Home</h1>
    
    <div class="w-full max-w-md">
        <label>ID:</label>
        <h1>{{ $idea->id }}</h1>
        <br>
        <label>Descreption:</label>
        <p>{{ $idea->descreption }}</p>
        <br>
        <div>
            <a href="{{ route('ideasEdit', $idea->id) }}" type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                Edit
            </a>
        </div>
        <br>
        <form action="{{ route('ideasDelete', $idea->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                Delete
            </button>
        </form>
    </div>
</x-layout>