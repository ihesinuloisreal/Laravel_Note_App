<x-app-layout>
    <div class="container mx-auto p-6">
        <!-- Create New Note Header -->
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Create New Note</h1>

        <!-- Create New Note Form -->
        <form action="{{ route('note.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
            @csrf

            <!-- Textarea for the New Note -->
            <textarea name="note" id="note" cols="30" rows="10" 
                class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Enter your note here"></textarea>

            <!-- Action Buttons (Cancel & Submit) -->
            <div class="mt-4 flex justify-between">
                <!-- Cancel Button -->
                <a href="{{ route('note.index') }}" class="text-blue-500 hover:text-blue-600 underline">Cancel</a>

                <!-- Submit Button -->
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
