<x-app-layout>
    <div class="container mx-auto p-6">
        <!-- Note Header -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h1 class="text-xl font-bold text-gray-800">Note: {{ $notes->created_at->format('F j, Y, g:i a') }}</h1>

            <!-- Note Actions (Cancel and Delete) -->
            <div class="flex justify-between mt-4">
                <!-- Cancel Button -->
                <a href="{{ route('note.store') }}" class="text-blue-500 hover:text-blue-600 underline">Cancel</a>

                <!-- Delete Form -->
                <form action="{{ route('note.destroy', $notes) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Delete</button>
                </form>
            </div>
        </div>

        <!-- Note Content -->
        <div class="bg-gray-100 shadow-sm rounded-lg p-6">
            <div class="text-gray-800 whitespace-pre-wrap">
                {{ $notes->note }}
            </div>
        </div>
    </div>
</x-app-layout>
