@props([
    'collection' => [],
    'oldvalue' => ''
    ])

<div class="{{ $class }}">
    <label for="{{ $name }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <select id="{{ $name }}" name="{{ $name }}"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="{{ $value }}">{{ $option }}</option>
        @foreach ($collection as $item)
            <option value="{{ $item->id }}" @if (old($name, $oldvalue) == $item->id) selected @endif>{{ $item->name }}</option>
        @endforeach
    </select>
    @error($name)
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
            {{ $message }}
        </p>
    @enderror
</div>
