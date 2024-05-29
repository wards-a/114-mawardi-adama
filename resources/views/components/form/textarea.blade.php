@props(['value' => ''])

<div class="{{ $class }}">
    <label for="{{ $name }}"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <textarea id="{{ $name }}" name="{{ $name }}" rows="{{ $rows }}"
        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="{{ $placeholder }}">{{ old($name, $value) }}</textarea>
    @error($name)
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
            {{ $message }}
        </p>
    @enderror
</div>
