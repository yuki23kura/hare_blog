@props(['message'])

@if ($message)
    <div class="bg-blue-100 border-blue-500 text-blue-700 border-l-4 p-4 my-2">
        {{ $message }}
    </div>
@endif
