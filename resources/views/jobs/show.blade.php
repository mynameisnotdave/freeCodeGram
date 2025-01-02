<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2>{{ $job->title }}</h2>
    <p>
        This job pays £{{ $job->salary }} per year.
    </p>

    <p class="mt-6">
        <x-linkbutton href="/jobs/{{ $job->id }}/edit">Edit Job</x-linkbutton>
    </p>
</x-layout>
