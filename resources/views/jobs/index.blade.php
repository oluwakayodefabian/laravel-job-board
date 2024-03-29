<x-layout>

    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index')]" />
    <x-card class="mb-4 test-sm">
        <div class="mb-4 grid grid-cols-2 gap-4">
            <div>
                <p class="mb-1 font-semibold">Search</p>
                <x-text-input name="search" value="" placeholder="Search for any text" />
            </div>
            <div>
                <p class="mb-1 font-semibold">Salary</p>
                <div class="flex space-x-2">
                    <x-text-input name="min_salary" value="" placeholder="From" />
                    <x-text-input name="max_salary" value="" placeholder="To" />
                </div>
            </div>
            <div>
                3
            </div>
            <div>4</div>
        </div>
    </x-card>
    @foreach ($jobs as $job)
    <x-job-card class="mb-4" :job="$job">
        <div>
            <x-link-button :href="route('jobs.show', $job)">
                Read More...
            </x-link-button>
        </div>
    </x-job-card>
    @endforeach
</x-layout>