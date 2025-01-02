<x-layout>
    <x-slot:heading>
        About Page
    </x-slot:heading>
    @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200">
            <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
            <div>
                <strong>{{ $job['title'] }}: Pays £{{ $job['salary'] }} per year.</strong>
            </div>
        </a>
    @endforeach
    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>
