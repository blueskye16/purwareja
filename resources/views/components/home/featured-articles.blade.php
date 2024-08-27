{{-- <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 mx-8">
    <div id="featuredArticle"
        class="relative flex max-w-[24rem] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md mx-auto lg:mx-0 hover:shadow-lg transition-shadow duration-300">
        <div class="relative m-0 overflow-hidden rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
            <img src="/images/bg-hero.jpg" alt="featured image" class="antialiased" />
        </div>
        <div class="p-6">
            <div class="flex justify-between items-center">
                <a href="#"
                    class="text-xs relative rounded-full bg-big-stone-900 text-white px-3 py-1.5 font-medium hover:bg-gray-100 z-0">Marketing</a>
                <h4 class="font-sans text-xs font-normal tracking-normal text-blue-gray-900 antialiased">
                    Sabtu, 6 Juli 2024
                </h4>
            </div>
            <p class="mt-1 block font-sans text-xl font-normal leading-relaxed text-gray-700 antialiased">
                Because it's about motivating the doers. Because I'm here to follow my dreams and inspire
                others.
            </p>
            <a href="#"
                class="inline-block mt-10 text-blue-500 hover:text-blue-700 hover:scale-110 hover:ease-linear">Read
                more &raquo;</a>
        </div>
    </div>
    <div id="featuredArticle"
        class="relative flex max-w-[24rem] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md mx-auto lg:mx-0 hover:shadow-lg transition-shadow duration-300">
        <div
            class="relative m-0 overflow-hidden rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
            <img src="/images/bg-hero.jpg" alt="featured image" class="antialiased" />
        </div>
        <div class="p-6">
            <div class="flex justify-between items-center">
                <a href="#"
                    class="text-sm relative rounded-full bg-orange-400 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100 z-0">Marketing</a>
                <h4 class="font-sans text-sm/5 font-normal tracking-normal text-blue-gray-900 antialiased">
                    Sabtu, 6 Juli 2024
                </h4>
            </div>
            <p class="mt-1 block font-sans text-xl font-normal leading-relaxed text-gray-700 antialiased">
                Because it's about motivating the doers. Because I'm here to follow my dreams and inspire
                others.
            </p>
            <a href="#"
                class="inline-block mt-10 text-blue-500 hover:text-blue-700 hover:scale-110 hover:ease-linear">Read
                more &raquo;</a>
        </div>
    </div>
    <div id="featuredArticle"
        class="relative flex max-w-[24rem] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md mx-auto lg:mx-0 hover:shadow-lg transition-shadow duration-300">
        <div
            class="relative m-0 overflow-hidden rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
            <img src="/images/bg-hero.jpg" alt="featured image" class="antialiased" />
        </div>
        <div class="p-6">
            <div class="flex justify-between items-center">
                <a href="#"
                    class="text-sm relative rounded-full bg-orange-400 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100 z-0">Marketing</a>
                <h4 class="font-sans text-sm/5 font-normal tracking-normal text-blue-gray-900 antialiased">
                    Sabtu, 6 Juli 2024
                </h4>
            </div>
            <p class="mt-1 block font-sans text-xl font-normal leading-relaxed text-gray-700 antialiased">
                Because it's about motivating the doers. Because I'm here to follow my dreams and inspire
                others.
            </p>
            <a href="#"
                class="inline-block mt-10 text-blue-500 hover:text-blue-700 hover:scale-110 hover:ease-linear">Read
                more &raquo;</a>
        </div>
    </div>
</div> --}}

<div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 mx-8">
    @foreach ($featuredPosts as $featuredPost)
        <div id="featuredArticle"
            class="relative flex max-w-[24rem] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md mx-auto lg:mx-0 hover:shadow-lg transition-shadow duration-300">
            <div class="relative m-0 overflow-hidden rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
                {{-- <img src="{{ asset('images/' . $post->image) }}" alt="featured image" class="antialiased" /> --}}
                <img src="/images/bg-hero.jpg" alt="featured image" class="antialiased" />
            </div>
            <div class="p-6">
                <div class="flex justify-between items-center">
                    <a href="#"
                        class="text-xs relative rounded-full bg-big-stone-900 text-white px-3 py-1.5 font-medium hover:bg-gray-100 z-0">{{ $featuredPost->category->name }}</a>
                    <h4 class="font-sans text-xs font-normal tracking-normal text-blue-gray-900 antialiased">
                        {{ $featuredPost->created_at->format('l, j F Y') }}
                    </h4>
                </div>
                {{-- <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                    {!! Str::limit($featuredPost->body, 100) !!}</p> --}}
                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                    {{ Str::limit($featuredPost->body, 100) }}</p>
                <a href="#"
                    class="inline-block mt-10 text-blue-500 hover:text-blue-700 hover:scale-110 hover:ease-linear">Read
                    more &raquo;</a>
                {{-- @if (auth()->user()->can('update', $featuredPost)) --}}
                    <form action="{{ url('dashboard/manage-posts/featured/' . $featuredPost->id . '/unpin') }}" method="POST">
                    {{-- <form action="{{ route('unpin.post', $featuredPost) }}" method="POST"> --}}
                        @csrf
                        @method('PATCH')
                        <button type="submit"
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">
                            Unfeature
                        </button>
                    </form>
                {{-- @endif --}}
            </div>
        </div>
    @endforeach
</div>


