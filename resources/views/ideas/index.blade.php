<x-layout title="Home">
    <h1 class="text-3xl font-bold mb-4">Ideas</h1>
    
    <div class="w-full max-w-md">

        <div class="table-responsive">
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('ideasCreate') }}" type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Create a New Idea</a>
            </div>
            <br>
            <table class="table header-border table-responsive-sm">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>idea</th>
                        <th>created at</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($ideas as $idea)
                    <tr>
                        <td>{{ $idea->id }}</td>
                        <td>{{ $idea->descreption }}</td>
                        <td>{{ $idea->created_at }}</td>
                        <td><a href="{{ route('ideasView',$idea->id) }}">View</a>
                        </td>
                    </tr>
                    @empty
                    <li>no ideas</li>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>