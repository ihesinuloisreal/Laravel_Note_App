<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="mb-6 text-center">
            <a href="{{ route('note.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 inline-block">
                <h1 class="text-lg font-semibold">New Note</h1>
            </a>
        </div>
        
        <!-- Notes Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($notes as $note)
                <div class="bg-white shadow-md rounded-lg p-4">
                    <!-- Note Content (Truncated to 30 words) -->
                    <div class="text-gray-800 mb-4">
                        {{ Str::words($note->note, 30) }}
                    </div>
                    <!-- Actions: View, Edit, Delete -->
                    <div class="flex justify-between items-center space-x-4">
                        <a href="{{ route('note.show', $note) }}" class="text-blue-500 hover:underline">View</a>
                        <a href="{{ route('note.edit', $note) }}" class="text-yellow-500 hover:underline">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $notes->links() }}
        </div>
    </div>
</x-app-layout>
