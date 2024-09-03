<x-home.layout>
    {{-- Jumbotron --}}

    <x-home.jumbotron></x-home.jumbotron>

    <main>
        {{-- featured articles --}}
        <section class="max-w-full px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <h1 class="text-[2em] md:text-4xl font-semibold text-center border-t-2 border-gray-200 mt-6 py-7">Konten
                    Unggulan
                </h1>
            </div>
            {{-- <x-home.featured-articles></x-home.featured-articles> --}}
            <x-home.featured_articles :posts="$posts"></x-home.featured_articles>
        </section>


        <div class="mx-auto max-w-7xl px-6 my-10 lg:px-8">
            <h1 class="text-[2em] md:text-4xl font-semibold border-t-2 border-gray-200 text-center pt-5">
                Konten Terbaru</h1>
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:mt-6 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                <x-home.posts :posts="$posts"></x-home.posts>

            </div>
        </div>

        {{ $posts->links() }}


        {{-- Footer --}}
        <x-home.footer></x-home.footer>
    </main>
</x-home.layout>
