<x-layout>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts"
                        class="inline-block mb-3 font-medium text-sm text-blue-500 hover:underline hover:text-blue-800">&laquo;
                        Kembali</a>
                    <a href="/categories/{{ $post->category->slug }}">
                        <span
                            class="relative rounded-full bg-{{ $post->category->color }}-200 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100 z-0">
                            {{ $post->category->name }}
                        </span>
                    </a>
                    <p class="text-xs">{{ $post->created_at->format('j F Y') }}</p>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>
                </header>
                <p class="lead">{{ $post->body }}</p>
                <p>Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way,
                    you can think things through before committing to an actual design project.</p>
                </footer>
</x-layout>
