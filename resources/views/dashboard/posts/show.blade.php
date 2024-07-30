<x-dashboard.layout>
    <x-slot name='title'></x-slot>

    <div class="pt-4 pb-16 lg:pt-6 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="w-full flex justify-center">
            <article
                class="w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-2 lg:text-4xl dark:text-white">
                        {{ $post->title }}
                    </h1>
                    <p class="text-xs mb-2">{{ $post->created_at->format('j F Y') }}</p>
                    <div class="flex justify-between items-center">
                        <div class="flex justify-between items-center">
                            <a href="/posts"
                                class="rounded-full bg-green-300 p-2 font-medium text-gray-800 z-0 text-xs hover:bg-green-600">&laquo;
                                Kembali
                            </a>
                            <a href="#"
                                class="rounded-full bg-green-300 ml-1 p-2 font-medium text-gray-800 z-0 text-xs hover:bg-green-600">&laquo;
                                Edit
                            </a>
                            <a href="#"
                                class="rounded-full bg-green-300 ml-1 p-2 font-medium text-gray-800 z-0 text-xs hover:bg-green-600">&laquo;
                                Hapus
                            </a>
                        </div>
                        <a href="/posts?category={{ $post->category->slug }}"
                            class="rounded-full bg-{{ $post->category->color }}-200 p-2 font-medium text-gray-800 z-0 text-xs hover:border-gray-600 hover:border-solid hover:border-2">
                            {{-- hover:bg-{{ $post->category->color }}-600 --}}
                            {{ $post->category->name }}
                        </a>
                    </div>
                    <img src="/images/bg-batik.jpg" alt="Post Image" class="h-64 min-w-full object-cover mt-3">
                </header>
                <p class="text-base">{{ $post->body }}</p>
            </article>
        </div>
    </div>

</x-dashboard.layout>
