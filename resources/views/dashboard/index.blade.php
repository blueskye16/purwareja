<x-dashboard.layout>
    {{-- <h1 class="m-2 text-2xl">Welcome back admin {{ auth()->user()->name }}</h1>

    <button class="_btn-primary">tester</button> --}}

    <h1 class="m-2 text-2xl font-semibold">Dashboard</h1>

    {{-- <div class="ml-2">
        <p>
        <h2>Website Desa Purwareja</h2>memiliki <span class="text-blue-800 font-semibold">{{ $posts->count() }}</span>
        postingan
        dengan artikel terakhir yang berjudul "<span
            class="text-blue-800 font-semibold">{{ $posts->last()->title }}</span>".</p>
    </div> --}}

    <section class="ml-2 mb-2">
        <p>
        <h2 class="inline">Website Desa Purwareja</h2> memiliki <span
            class="text-blue-800 font-semibold">{{ $countAllPosts }}</span>
        postingan
        dengan artikel terakhir yang berjudul "<span class="text-blue-800 font-semibold">{{ $lastPostTitle }}</span>".
        </p>
    </section>
    {{-- 
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Kategori
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Jumlah
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="border-b border-gray-200 dark:border-gray-700">

                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $category->name }}
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            {{ $category->posts_count }}
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}



    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-[80%] text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption
                class="p-5 text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Detail kategori bersama jumlah artikel:</p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
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
