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
            <a href="{{ route('ideasEdit', $idea->id) }}" type="submit" class="btn text-xl">
                Edit
            </a>
        </div>
        <br>
        <form action="{{ route('ideasDelete', $idea->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn text-xl">
                Delete
            </button>
        </form>
    </div>
</x-layout>