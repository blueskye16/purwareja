<x-dashboard.layout>
    {{-- <x-slot name='title'></x-slot> --}}

    <h1 class="m-2 text-2xl">Artikel Desa Purwareja</h1>

    @if (session()->has('success'))
        <div id="alert-1"
            class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif

    <a href="/dashboard/posts/create" class="_btn">Create post
    </a>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-5">
        <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
            <div>
                <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                    class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                    type="button">
                    <svg class="w-3 h-3 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                    </svg>
                    Last 30 days
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownRadio"
                    class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                    <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownRadioButton">
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="filter-radio-example-1" type="radio" value="" name="filter-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-1"
                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                    day</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input checked="" id="filter-radio-example-2" type="radio" value=""
                                    name="filter-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-2"
                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                    7 days</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="filter-radio-example-3" type="radio" value="" name="filter-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-3"
                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                    30 days</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="filter-radio-example-4" type="radio" value="" name="filter-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-4"
                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                    month</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="filter-radio-example-5" type="radio" value="" name="filter-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-5"
                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                    year</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <form action="/dashboard/posts">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    <div
                        class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                        {{-- <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg> --}}
                        <i data-feather="search" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                            aria-hidden="true"></i>
                    </div>
                    <input type="search" id="search"
                        class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Cari artikel" name="search" autocomplete="off">
            </div>
            </form>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Last Updated
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                            {{-- {{ $post->id }} --}}
                        </th>
                        <td class="px-6 py-4">
                            {{ $post->title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->category->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->updated_at }}
                        </td>
                        <td class="px-6 py-4 flex">
                            <a href="/dashboard/posts/{{ $post->slug }}"
                                class="bg-blue-500 p-1 m-1 rounded-md text-white hover:bg-blue-700">
                                <i data-feather="eye">
                                </i>
                            </a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit"
                                class="bg-yellow-400 p-1 m-1 rounded-md text-white hover:bg-yellow-500">
                                <i data-feather="edit">
                                </i>
                            </a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="bg-red-500 p-1 m-1 rounded-md text-white hover:bg-red-700"
                                    onclick="return confirm('Are you sure?')">
                                    <i data-feather="trash-2"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    {{-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-4">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Last Updated
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $post->id }}
                        </th>
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $post->title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $post->category->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->updated_at }}
                        </td>
                        <td class="px-6 py-4 flex">
                            <a href="/dashboard/posts/{{ $post->slug }}"
                                class="bg-blue-500 p-1 m-1 rounded-md text-white hover:bg-blue-700">
                                <i data-feather="eye">
                                </i>
                            </a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit"
                                class="bg-yellow-400 p-1 m-1 rounded-md text-white hover:bg-yellow-500">
                                <i data-feather="edit">
                                </i>
                            </a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="bg-red-500 p-1 m-1 rounded-md text-white hover:bg-red-700"
                                    onclick="return confirm('Are you sure?')">
                                    <i data-feather="trash-2"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
    {{ $posts->links() }}



</x-dashboard.layout>
