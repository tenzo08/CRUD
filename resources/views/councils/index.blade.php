<x-layouts.app title="Library">
    <div class="flex justify-between items-center">
        <h2 class="text-4xl font-semibold mb-4">Library > DOST Priority Areas</h2>
        <a href="{{ route('councils.create') }}"
            class="w-24 inline-block text-center bg-[#153261] text-white font-semibold px-4 py-1 rounded hover:bg-[#122340] text-sm">
            New
        </a>
    </div>

    <div class="w-full flex justify-between items-center mb-4 mt-4">
        <div class="w-full flex items-center gap-2">
            <label class="text-sm font-medium">Filter by</label>
            <select id="filter-active" class="border border-gray-300 rounded pr-8 py-1 text-sm">
                <option value="all">All</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
            <input
                type="text"
                id="search-box"
                placeholder="Search..."
                class="w-1/5 ml-2 border border-gray-300 rounded px-2 py-1 text-sm" />

            <div id="entries-count" class="ml-auto mt-4 text-sm text-right text-gray-600">
                No. of entries :
            </div>
        </div>
    </div>

    <table class="w-full text-sm border-t border-b border-gray-300">
        <thead>
            <tr class="text-left bg-gray-100">
                <th class="px-4 py-4 font-medium text-[#153261]">Sectoral Council</th>
                <th class="px-4 py-4 font-medium text-[#153261]">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($councils as $council)
            <tr class="border-t border-gray-300" data-active="{{ $council->is_active ? '1' : '0' }}">
                <td class="px-4 py-4">
                    <a href="{{ route('councils.edit', $council) }}">{{ $council->name }}</a>
                </td>
                <td class="px-4 py-4 flex justify-between items-center">
                    {{ $council->description }}
                    <form method="POST" action="{{ route('councils.destroy', $council) }}">
                        @csrf
                        @method('DELETE')
                        <button class="text-gray-500 hover:text-red-600 font-bold" onclick="return confirm('Are you sure?')">×</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layouts.app>