<x-dashboard.layout>
    {{-- <x-slot name='title'></x-slot> --}}

    <h1 class="m-2 text-2xl">My Posts</h1>

    <a href="/dashboard/posts/create"
        class="v-btn-primary">Create
    </a>
    {{-- <a href="/dashboard/posts/create"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 inline-block">Create
    </a> --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                            {{ $loop->iteration }}
                        </th>
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $post->title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $post->category->name }}
                        </td>
                        <td class="px-6 py-4 flex">
                            <a href="/dashboard/posts/{{ $post->slug }}"
                                class="bg-blue-500 p-1 m-1 rounded-md text-white hover:bg-blue-700">
                                <i data-feather="eye" class="">
                                </i>
                            </a>
                            <a href="#" class="bg-yellow-400 p-1 m-1 rounded-md text-white hover:bg-yellow-500">
                                <i data-feather="edit" class="">
                                </i>
                            </a>
                            <a href="#" class="bg-red-500 p-1 m-1 rounded-md text-white hover:bg-red-700">
                                <i data-feather="trash-2" class="">
                                </i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</x-dashboard.layout>
