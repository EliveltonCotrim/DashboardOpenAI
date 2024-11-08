<div>
    <div class="overflow-x-auto">
        <table class="w-full divide-y divide-gray-300">
            <thead class="bg-gray-50 dark:bg-gray-800">
                <tr>
                    @foreach ($columns as $column)
                        <th scope="col" @class([
                            'px-3 py-3.5 text-left text-sm font-semibold text-gray-900  dark:text-white',
                        ])>{{ $column['label'] }}</th>
                    @endforeach

                    @if ($editRoute || $deleteRoute)
                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                            <span class="sr-only">Actions</span>
                        </th>
                    @endif
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($items as $item)
                    <tr class="bg-white hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-800">
                        @foreach ($columns as $column)
                            <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-white">
                                {{ data_get($item, $column['column']) }}</td>
                        @endforeach

                        @if ($editRoute)
                            <td class="flex items-center justify-start gap-3 px-3 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-white">
                                <a href="{{ route($editRoute, $item->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 hover:text-blue-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </a>

                                {{-- @if ($deleteRoute) --}}
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 hover:text-red-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </a>
                                {{-- @endif --}}
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="py-4">
        {{ $items->links() }}
    </div>
</div>
