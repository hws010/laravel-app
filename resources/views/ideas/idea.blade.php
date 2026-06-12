<x-layout title="idea {{ $idea->id }}">
    
    <div class="card bg-neutral p-6">
        <div class="flex gap-1 pb-4">
            <label>ID:</label>
            <h1>{{ $idea->id }}</h1>
        </div>
        <div>
            <label>Descreption:</label>
            <p>{{ $idea->descreption }}</p>
        </div>
        <div class="flex justify-between pt-5">
            <a href="{{ route('ideasEdit', $idea->id) }}" type="submit" class="btn text-xl">
                Edit
            </a>
            <button type="submit" class="btn btn-error text-xl" form="delete">
                Delete
            </button>
        </div>
        <form id="delete" action="{{ route('ideasDelete', $idea->id) }}" method="post">
            @csrf
            @method('delete')
            
        </form>
    </div>
</x-layout>