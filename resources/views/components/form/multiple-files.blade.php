<div class="{{ $class }}">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
        for="{{ $name }}">{{ $label }}</label>
    <input name="{{ $name }}"
        class="input-files block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        id="{{ $name }}" type="file" accept="{{ $accept }}" multiple>
    @error($name)
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
            {{ $message }}
        </p>
    @enderror
</div>
