<x-guest-layout>
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Before they sold out
                    <br class="hidden lg:inline-block">readymade gluten
                </h1>
                <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
                <div class="flex justify-center">
                    <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                    <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
            </div>
        </div>
        <button
            class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
            <svg class=" w-7 h-7 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
                </path>
            </svg>
        </button>
        <button
            class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
            <svg class=" w-7 h-7 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </section>

    <div class="w-full grid lg:grid-cols-4 sm:grid-cols-1 gap-2 py-8">

        <section class="">
            <div class="relative items-center w-full mx-auto">
                <div class="grid">
                    <div class="w-full mx-auto my-4 bg-white shadow-xl rounded-xl">
                        <div class="p-6 w-full mb-6">
                            <span class="mb-8 text-lg font-semibold tracking-widest text-blue-600 uppercase">Call for Papers</span>
                            <marquee width="100%" scrollamount="3" direction="up" class="text-lg leading-relaxed text-gray-900 h-36">
                                <p>
                                    Scholars and Researchers in the academic community and other institutions are invited to submit their
                                    research articles for publication.
                                </p>
                                <p>
                                    An Author wishing to submit a paper should ensure that it has not been
                                    previously published or its being considered for publication in another journal.
                                </p>
                                <p>
                                    The manuscript should be the Author's original work. IIARD invites Researchers, Academicians, Professionals,
                                    Practitioners, and Students from all over the world to submit high-quality theoretical and empirical
                                    original research papers, case studies, review papers, literature reviews, book reviews, conceptual
                                    framework, analytical and simulation models, and technical notes for publication.
                                </p>
                            </marquee>
                        </div>
                        <div>
                        <img alt="logo" class="flex-shrink-0 object-cover object-center w-200 h-200 mx-auto rounded p-2" src="{{ config('app.url')."/image/placeholder.png" }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative items-center w-full mx-auto">
                <div class="grid">
                    <div class="w-full mx-auto my-4 bg-white shadow-xl rounded-xl">
                        <div class="p-6">
                            <span class="mb-8 text-lg font-semibold tracking-widest text-blue-600 uppercase">Latest Updates</span>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lg:pl-16 col-span-3 sm:pt-24 lg:pt-0">
            <div class="flex flex-wrap w-full lg:mb-20 sm:mb-10">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Latest Journals</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
                {{--                    <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>--}}
            </div>

            <div class="flex flex-wrap mx-auto md:flex-wrap sm:pr-2">
                @forelse($journals as $key => $journal)
                    <a href="{{ route('journals.show', $journal->id) }}" class="lg:pr-16 lg:pb-8">
                        <div class="flex w-full">
                            <div class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:-ml-4 md:hover:-translate-x-4 md:hover:-translate-y-4">
                                <img class="object-cover object-center w-full rounded-t-xl h-[52px] lg:h-48 md:h-36" src="{{ config('app.url')."/storage/".$journal->image }}" alt="journal-image">
                                <div class="px-3 py-2">
                                    <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                        <span class="">{{ $journal->title }}</span>
                                    </h4>
                                    <p class="mt-2 text-base font-normal text-gray-500 leading-relax">
                                        {!! \Illuminate\Support\Str::words($journal->body, 10, '...') !!}
                                    </p>
                                </div>
                                <div class=" flex flex-inline m-2">
                                    <button class="px-2 py-2 text-xs font-medium text-center text-white bg-blue-600 lg:px-4 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        {{ $journal->category->name ?? 'Uncategorized' }}</button>
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    <a href="{{ route('journals.show', 1) }}" class="lg:pr-16">
                        <div class="flex w-full">
                            <div class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:-ml-4 md:hover:-translate-x-4 md:hover:-translate-y-4">
                                <img class="object-cover object-center w-full rounded-t-xl lg:h-48 md:h-36" src="/assets/images/placeholders/neon-4.jpg" alt="blog">
                                <div class="px-3 py-2">
                                    <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                        <span class="">Create New Journal</span>
                                    </h4>
                                    <p class="mt-4 text-base font-normal text-gray-500 leading-relax">
                                        Journal Description</p>
                                </div>
                                <div class=" flex flex-inline m-2">
                                    <button class="px-2 py-1 text-xs font-medium text-center text-white bg-blue-600 lg:px-4 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">IIGD Journal</button>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforelse
            </div>

            <div class="pt-8 max-w-[160px]">
                <a href="{{ route('journals') }}" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Load more</a>
            </div>
        </section>
    </div>

    <section class="">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-16 mx-auto">
                <div class="flex flex-wrap w-full lg:mb-20 sm:mb-10">
                    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Latest Published Articles</h1>
                        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                    </div>
{{--                    <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>--}}
                </div>
                <div class="flex flex-wrap -m-4">
                    @forelse($articles as $key => $article)
                        <div class="xl:w-1/4 md:w-1/2 p-4">
                            <div class="bg-gray-100 p-6 rounded-lg">
                                <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ $article->getImagePath() }}" alt="content">
                                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">{{ $article->authors }}</h3>
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">{{ $article->title }}</h2>
                                <p class="leading-relaxed text-base">
                                    {!! \Illuminate\Support\Str::words($article->abstract, 10, '...') !!}
                                </p>
                            </div>
                        </div>
                    @empty
                        <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="bg-gray-100 p-6 rounded-lg">
                            <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/721x401" alt="content">
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Author</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Journal Article</h2>
                            <p class="leading-relaxed text-base">Article Description</p>
                        </div>
                    </div>
                    @endforelse
                </div>
                <div class="pt-16 max-w-[160px]">
                    <a class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Load more</a>
                </div>
            </div>
        </section>

{{--        <div class="relative mx-auto max-w-7xl">--}}
{{--            <div class="grid max-w-lg gap-12 mx-auto mt-12 lg:grid-cols-3 lg:max-w-none">--}}
{{--                <div class="flex flex-col mb-12 overflow-hidden cursor-pointer">--}}
{{--                    <a href="/blog-post">--}}
{{--                        <div class="flex-shrink-0">--}}
{{--                            <img class="object-cover w-full h-48 rounded-lg" src="/assets/images/placeholders/neon-1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <div class="flex flex-col justify-between flex-1">--}}
{{--                        <a href="/blog-post"></a>--}}
{{--                        <div class="flex-1">--}}
{{--                            <a href="/blog-post">--}}
{{--                                <div class="flex pt-6 space-x-1 text-sm text-gray-500">--}}
{{--                                    <time datetime="2020-03-10"> Mar 10, 2020 </time>--}}
{{--                                    <span aria-hidden="true"> · </span>--}}
{{--                                    <span> 4 min read </span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="block mt-2 space-y-6">--}}
{{--                                <h3 class="text-2xl font-semibold leading-none tracking-tighter text-neutral-600">Typography on app.</h3>--}}
{{--                                <p class="text-lg font-normal text-gray-500">Filling text so you can see how it looks like with text. Did I said text?</p>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="flex flex-col mb-12 overflow-hidden cursor-pointer">--}}
{{--                    <a href="/blog-post">--}}
{{--                        <div class="flex-shrink-0">--}}
{{--                            <img class="object-cover w-full h-48 rounded-lg" src="/assets/images/placeholders/neon-2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <div class="flex flex-col justify-between flex-1">--}}
{{--                        <a href="/blog-post"></a>--}}
{{--                        <div class="flex-1">--}}
{{--                            <a href="/blog-post">--}}
{{--                                <div class="flex pt-6 space-x-1 text-sm text-gray-500">--}}
{{--                                    <time datetime="2020-03-10"> Mar 10, 2020 </time>--}}
{{--                                    <span aria-hidden="true"> · </span>--}}
{{--                                    <span> 4 min read </span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="block mt-2 space-y-6">--}}
{{--                                <h3 class="text-2xl font-semibold leading-none tracking-tighter text-neutral-600">Typography on app.</h3>--}}
{{--                                <p class="text-lg font-normal text-gray-500">Filling text so you can see how it looks like with text. Did I said text?</p>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="flex flex-col mb-12 overflow-hidden cursor-pointer">--}}
{{--                    <a href="/blog-post">--}}
{{--                        <div class="flex-shrink-0">--}}
{{--                            <img class="object-cover w-full h-48 rounded-lg" src="/assets/images/placeholders/neon-3.jpg" alt="">--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <div class="flex flex-col justify-between flex-1">--}}
{{--                        <a href="/blog-post"></a>--}}
{{--                        <div class="flex-1">--}}
{{--                            <a href="/blog-post">--}}
{{--                                <div class="flex pt-6 space-x-1 text-sm text-gray-500">--}}
{{--                                    <time datetime="2020-03-10"> Mar 10, 2020 </time>--}}
{{--                                    <span aria-hidden="true"> · </span>--}}
{{--                                    <span> 4 min read </span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="block mt-2 space-y-6">--}}
{{--                                <h3 class="text-2xl font-semibold leading-none tracking-tighter text-neutral-600">Typography on app.</h3>--}}
{{--                                <p class="text-lg font-normal text-gray-500">Filling text so you can see how it looks like with text. Did I said text?</p>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>


</x-guest-layout>
