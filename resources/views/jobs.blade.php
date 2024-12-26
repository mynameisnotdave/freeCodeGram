<x-layout>
    <x-slot:heading>
        About Page
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}">
                    <strong>{{ $job['title'] }}: Pays {{ $job['salary'] }} per year.</strong>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
