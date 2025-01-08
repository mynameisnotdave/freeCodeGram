<x-layout>
    <x-slot:heading>Create job</x-slot:heading>
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                 <h2 class="text-base/7 font-semibold text-gray-900">Create a new job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of details from you.</p>
                <x-form-error name="title" />
                <x-form-error name="salary" />
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                 <x-form-field>
                        <label for="title">Title</label>
                        <div class="mt-2">
                               <x-form-input name="title" id="title" placeholder="CEO" type="text" required />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <label for="salary">Salary</label>
                            <div class="mt-2">
                                <x-form-input type="number" name="salary" id="salary" placeholder="50000" required />
                            </div>
                    </x-form-field>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                    <x-form-button />
                </div>
            </div>
        </div>
    </form>
</x-layout>
