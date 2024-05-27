@props([
    'collection' => [],
    'theads' => [],
    'tactions' => [],
])

@php
    $collection = $collection[0];
@endphp

{{-- {{ dd($collection[0]) }} --}}
<div {{ $attributes }}>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all" class="sr-only">checkbox</label>
                    </div>
                </th>
                @foreach ($theads as $thead)
                    <th scope="col" class="px-6 py-3">
                        {{ $thead }}
                    </th>
                @endforeach
                @foreach ($tactions as $taction)
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">{{ $taction['name'] }}</span>
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $items)
                {{-- {{ dd($items) }} --}}
                <tr class="row-item bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                    data-item-id="{{ $items['id'] }}">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-1" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    {{-- {{ dd(count($theads)) }} --}}
                    @foreach ($items->toArray() as $item)
                        @if ($loop->first)
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item }}
                            </th>
                        @endif
                        @if (!$loop->first && !$loop->last)
                            <td class="px-6 py-4 truncate max-w-xs">
                                {{ $item }}
                            </td>
                        @endif
                    @endforeach
                    @foreach ($tactions as $action)
                        @if ($action['name'] === 'edit')
                            {{-- {{ dd($items['id']) }} --}}
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route($action['route'], [$items['id']]) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ubah</a>
                            </td>
                        @endif
                        @if ($action['name'] === 'remove')
                            <td class="px-6 py-4 text-right">
                                <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal" data-item-id="{{ $items['id'] }}" data-route-remove="{{ $action['route'] }}" class="btn-remove-item font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</button>
                            </td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<x-table.pagination class="p-4 dark:bg-gray-800 sm:rounded-b-lg" aria-label="Table navigation">
    {{ $collection->links() }}
</x-table.pagination>
