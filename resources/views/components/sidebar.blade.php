<div class="w-1/7 h-full border boder-black-900">
    <div class="w-full h-1/4 flex justify-center items-end">
        <h1 class="text-7xl font-bold">⋮</h1>
    </div>
    <div class="w-full h-3/4 p-2">
        <button id="dropdownButton" class="inline-flex justify-between w-full px-4 py-2 text-lg font-medium text-[#153261] focus:outline-none">
            <a href="/">Library</a> <span class="rotate-90">></span>
        </button>
        <div class="w-full mt-2 ">
            <div class="flex flex-col gap-y-4 ml-10">
                <x-nav-link href="/councils" :active="request()->is('councils')">- DOST Priority Areas</x-nav-link>
                <x-nav-link href="/institutions" :active="request()->is('institutions')">- Institutions</x-nav-link>
                <x-nav-link href="/countries" :active="request()->is('countries')">- Countries</x-nav-link>
                <x-nav-link href="/local_regions" :active="request()->is('local_regions')">- Local Regions & Provinces</x-nav-link>
                <x-nav-link href="/area_of_expertise" :active="request()->is('area_of_expertise')">- Area of Expertise</x-nav-link>
                <x-nav-link href="/specializations" :active="request()->is('specializations')">- Specializations</x-nav-link>
                <x-nav-link href="/professions" :active="request()->is('professions')">- Professions</x-nav-link>
                <x-nav-link href="/degree_courses" :active="request()->is('degree_courses')">- Degree Courses</x-nav-link>
                <x-nav-link href="/user_accounts" :active="request()->is('user_accounts')">- USER ACCOUNTS</x-nav-link>
                <x-nav-link href="/audit_log" :active="request()->is('audit_log')">- AUDIT LOG</x-nav-link>
            </div>
        </div>
    </div>
</div>