<x-layouts.app title="Library">
    <div class="flex justify-between items-center pb-4">
        <h2 class="text-4xl font-semibold mb-4">DOST Priority Areas</h2>
    </div>
    <div class="flex items-center justify-center ">
        <form method="POST" action="{{ route('councils.store') }}" class="w-1/2">
            @csrf

            <div class="border border-solid p-9 py-8">
                <div class="flex flex-col py-3">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="w-full border border-gray-500 rounded px-2 py-1">
                </div>
                <div class="flex flex-col py-3">
                    <label for="description">Description:</label>
                    <textarea
                        name="description"
                        id="description"
                        class="w-full h-[150px] border border-gray-500 rounded px-2 py-1"></textarea>
                </div>
                <div class="flex flex-col py-3">
                    <label for="is_active">Status:</label>
                    <select name="is_active" id="is_active" class="h-[40px] border border-gray-500 rounded pr-8 py-1 text-sm">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>

            <div class="flex items-center justify-center py-4">
                <button type="submit" class="w-32 px-4 py-2 bg-gray-800 rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Save
                </button>
            </div>
        </form>
    </div>
</x-layouts.app>
