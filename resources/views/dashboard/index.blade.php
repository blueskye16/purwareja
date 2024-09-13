<x-dashboard.layout>
    {{-- <h1 class="m-2 text-2xl">Welcome back admin {{ auth()->user()->name }}</h1>

    <button class="_btn-primary">tester</button> --}}

    <h1 class="m-2 text-2xl font-semibold">Dashboard</h1>

    <section class="ml-2 mb-2">
        <p>
        <h2 class="inline">Website Desa Purwareja</h2> memiliki <span
            class="text-blue-800 font-semibold">{{ $countAllPosts }}</span>
        postingan
        dengan artikel terakhir yang berjudul "<span class="text-blue-800 font-semibold">{{ $lastPostTitle }}</span>".
        </p>
    </section>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[80%]">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 bg-gray-200">
            <caption
                class="p-5 text-left rtl:text-right text-gray-900 bg-gray-100 dark:text-white dark:bg-gray-800">
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Detail kategori bersama jumlah artikel:</p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Kategori
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $category->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $category->posts_count }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>





</x-dashboard.layout>
