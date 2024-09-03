@forelse ($posts as $post)
<article class="flex max-w-2xl flex-col items-start justify-between bg-gray-300 rounded-lg p-5">
    <div class="flex items-center justify-between gap-x-4 text-xs w-full">
        <a href="/posts?category={{ $post->category->slug }}"
            class="relative rounded-full bg-big-stone-800 px-3 py-1.5 font-medium text-white hover:bg-big-stone-950 z-0">{{ $post->category->name }}</a>
        <time datetime="2020-03-16"
            class="text-gray-500">{{ $post->created_at->diffForHumans() }}</time>
    </div>
    <div class="group relative">
        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            <a href="/posts/{{ $post->slug }}">
                <span class="absolute inset-0"></span>
                {{ $post->title }}
            </a>
        </h3>
        <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
            {{ Str::limit($post->body, 100) }}</p>
    </div>
    <a href="/posts/{{ $post->slug }}"
        class="mt-5 text-blue-500 hover:text-blue-700 hover:scale-110 hover:ease-linear">
        <p>Read More &raquo;</p>
    </a>
</article>

@empty
<div>
    <p class="font-semibold text-xl my-4">Artikel tidak ditemukan</p>
    <p><a href="/posts" class=" text-blue-600 hover:text-blue-800 hover:underline">&laquo;
            Kembali</a></p>
</div>
@endforelse