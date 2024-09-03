<x-home.layout>
    <main>
        <div class="bg-white py-8 mt-4">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <h1 class="text-[2em] md:text-4xl font-semibold text-center py-2">
                    Artikel Desa Purwareja</h1>
                <x-home.search-bar action="/posts"></x-home.search-bar>
                {{ $posts->links() }}
                <div
                    class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:mt-6 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                    <x-home.posts :posts="$posts"></x-home.posts>

                </div>
            </div>
        </div>
    </main>

    {{ $posts->links() }}

    <x-home.footer></x-home.footer>

</x-home.layout>
