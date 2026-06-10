<x-layout title="Home">
    <h1 class="text-3xl font-bold mb-4">Edit:</h1>
    
    <div class="w-full max-w-md">
        <form action="{{ route('ideasEdit', $idea->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="col-span-full">
                <label for="descreption" class="block text-sm/6 font-medium text-white">Idea body</label>
                <div class="mt-2">
                    <textarea id="descreption" name="descreption" rows="3" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">{{ $idea->descreption }}</textarea>
                </div>
                <p class="mt-3 text-sm/6 text-gray-400">Write an idea to save for later.</p>
                <br>
                <x-forms.error name="descreption" />
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit" class="btn text-xl">Save</button>
            </div>
        </form>
    </div>
</x-layout>