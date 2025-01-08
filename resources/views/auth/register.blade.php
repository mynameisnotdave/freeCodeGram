<x-layout>
    <x-slot:heading>Register</x-slot:heading>
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <x-form-error name="name" />
                <x-form-error name="email_address" />
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="name">Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="name" id="name" placeholder="Joe" type="text" required />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email_address">Email address</x-form-label>
                            <div class="mt-2">
                                <x-form-input type="email" name="email_address" id="email_address"
                                    placeholder="joe@joe.com" required />
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
