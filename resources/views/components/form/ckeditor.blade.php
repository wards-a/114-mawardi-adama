@props(['value' => ''])

<div class="{{ $class }}">
    <label for="editor"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <textarea name="{{ $name }}" id="editor" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="{{ $placeholder }}">{{ old($name, $value) }}</textarea>
</div>