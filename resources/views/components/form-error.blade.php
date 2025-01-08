@props(['name'])

@error($name)
    <p class="font-bold text-red-500">{{ $message }}</p>
@enderror
