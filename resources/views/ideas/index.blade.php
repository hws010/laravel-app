<x-layout title="Home">
    <h1 class="text-3xl font-bold mb-4">Ideas</h1>
    
    <div class="w-full">

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{ route('ideasCreate') }}" type="submit" class="btn text-xl">Create a New Idea</a>
        </div>
        <br>
        <ul class="mt-6 grid grid-cols-2 gap-x-6 gap-y-8">
            @forelse($ideas as $idea)
            <x-items.card cardTitile="{{ $idea->id }}" cardBody="{{ $idea->descreption }}" route="{{ route('ideasView', [$idea->id]) }}" />
            @empty
            <div class="card bg-neutral text-neutral-content w-96">
                <div class="card-body">
                    <h2 class="card-title">#</h2>
                    <p>Nothing is here</p>
                </div>
            </div>
            @endforelse
        </ul>
    </div>
    
</x-layout>