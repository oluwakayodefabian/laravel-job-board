<x-card class="mb-4">
    <div class="flex justify-between mb-4">
        <h2 class="text-lg font-medium">{{ $job->title }}</h2>
        <div class="text-red-500">
            ${{ number_format($job->salary) }}
        </div>
    </div>
    <div class="flex justify-between mb-4 text-sm text-slate-500 items-center">
        <div class="flex space-x-4">
            <div>Company Name</div>
            <div>{{ $job->location }}</div>
        </div>
        <div class="flex space-x-1 text-xs">
            <x-tag class="rounded-md border px-2 py-1">{{ Str::ucfirst($job->experience) }}</x-tag>
            <x-tag class="rounded-md border px-2 py-1">{{ $job->category }}</x-tag>
        </div>
    </div>

    <p class="text-sm text-slate-500 mb-4">
        {!! nl2br(e($job->description)) !!}
    </p>

    {{-- This below is for the link button which will only show in the lists of jobs page --}}
    {{$slot}}
</x-card>