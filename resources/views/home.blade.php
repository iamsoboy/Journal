<x-guest-layout>

    <!-- SLIDER START-->
    <div class="h-[360px] md:h-[520px] lg:h-[578px] relative z-10 mb-5 mx-auto max-w-[1030px]">
        <!-- Hero Slider -->
        <div class="swiper js-vv-hero-swiper h-full w-full overflow-visible">
            <!-- Slider required wrapper -->
            <div class="swiper-wrapper vv-hero-swiper-wrapper">
                @foreach($sliders as $slider)
                <!--  Slides #2 -->
                <div class="swiper-slide group">
                    <div class="relative isolate h-full w-full overflow-hidden bg-primary">
                        <div class="container h-full">
                            <div
                                class="grid h-full grid-cols-12 place-content-center gap-y-10 md:gap-x-6 lg:gap-x-7.5"
                            >

                                <!-- Content -->
                                <div
                                    class="col-span-full md:col-span-8 md:col-start-3 lg:col-span-10 lg:col-start-2"
                                >
                                    <div class="px-6 text-center lg:px-0">

                                        <!-- Meta -->
                                        <div
                                            class="mb-2 flex flex-wrap justify-center gap-1 text-sm text-white lg:mb-6 lg:pt-2 lg:text-base lg:text-white"
                                        >
                                            <div>{!! \Illuminate\Support\Str::words($slider->body, 10, '...') !!}</div>
                                        </div>
                                        <!-- Meta / End -->

                                        <!-- Title -->
                                        <h2
                                            class="mb-4 text-2xl font-bold leading-none tracking-tighter text-white sm:text-2.5xl md:mb-6 md:text-3xl md:leading-none lg:mb-12 lg:text-5.5xl lg:leading-none"
                                        >
                                            {{ $slider->title }}
                                        </h2>
                                        <!-- Title / End -->
                                    </div>
                                </div>
                                <!-- Content / End -->

                            </div>
                        </div>

                        <!-- Background Image Layer -->
                        <div class="absolute inset-0 -z-10 bg-[url({{ config('app.url').'/storage'.$slider->image }}] bg-cover bg-center bg-no-repeat"></div>
                        <!-- Background Image Layer / End -->

                        <!--  Layer -->
                        <div class="absolute inset-0 -z-10 bg-gray-900/40"></div>
                        <!--  Layer / End -->
                    </div>
                </div>
                <!--  Slides #2 / End -->
                @endforeach
            </div>


            <!-- Navigation Start-->
            <div
                class="js-vv-hero-swiper-btn-prev absolute top-1/2 left-3 z-10 hidden aspect-square w-8 items-center justify-center rounded-xl bg-white text-primary shadow-[0_10px_40px_0_rgba(0,0,0,0.2)] transition-colors hover:cursor-pointer hover:bg-accent hover:text-white dark:bg-gray-800 dark:text-white dark:hover:bg-accent dark:hover:text-white sm:flex xl:left-0 -translate-y-1/2 xl:-translate-x-1/2"
            >
                <svg class="h-2 w-2" fill="currentColor">
                    <use
                        xlink:href="{{ config('app.url').'/image/sprite.svg#chevron-left' }}"
                    ></use>
                </svg>
            </div>
            <div
                class="js-vv-hero-swiper-btn-next absolute top-1/2 right-3 z-10 hidden aspect-square w-8 items-center justify-center rounded-xl bg-white text-primary shadow-[0_10px_40px_0_rgba(0,0,0,0.2)] transition-colors hover:cursor-pointer hover:bg-accent hover:text-white dark:bg-gray-800 dark:text-white dark:hover:bg-accent dark:hover:text-white sm:flex xl:right-0 -translate-y-1/2 xl:translate-x-1/2"
            >
                <svg class="h-2 w-2" fill="currentColor">
                    <use
                        xlink:href="{{ config('app.url').'/image/sprite.svg#chevron-right'}}"
                    ></use>
                </svg>
            </div>
            <!-- Navigation End -->
        </div>
        <!-- Hero Slider End -->
    </div>

    <!-- MAIN BODY START-->
    <div class="flex flex-col bg-[#ECEFF2] dark:bg-gray-900">
        <div class="relative w-full py-[20px]">
            <div class="container z-1">
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                    <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-9 ">
                        <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl rounded-2xl shadow-lg w-full relative p-4 mb-4">
                            <div class="flex justify-between">
                                <p class="dark:text-slate-200">
                                    <span class="font-bold border-b border-dashed border-red-400">Latest Posts </span>
                                </p>
                                <p class="dark:text-slate-200">
                                    <span class="font-medium">Today </span>: {{ now()->format('d-m-Y') }}
                                </p>
                            </div>
                        </div>
                        @forelse($journals as $key => $journal)
                            <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                <div class="col-span-12 sm:col-span-6  md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                                    <img src="{{ config('app.url')."/storage/".$journal->image }}" alt="{{ $journal->title }}" class="max-w-full h-auto rounded-xl">
                                </div><!--end col-->
                                <div class="col-span-12 sm:col-span-6  md:col-span-8 lg:col-span-8 xl:col-span-8 ">
                                    <div class=" h-full flex flex-col p-3">
                                        <div class="w-full block">
                                            <span class="text-[12px] bg-pink-500/10 text-pink-500 dark:text-pink-600 rounded font-medium py-1 px-2 inline-block mb-3">{{ $journal->category->name ?? 'Uncategorized' }}</span>
                                            <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">{{ $journal->created_at }}</span>
                                        </div>
                                        <a href="#" class="text-[20px] md:text-3xl lg:text-3xl xl:text-[32px] leading-[30px] mb-5 md:mb-0 font-spectral font-semibold  text-gray-800 dark:text-slate-200 block">
                                            {{ $journal->title }}
                                        </a>
                                        <span>
                                            {!! \Illuminate\Support\Str::words($journal->body, 20, '...') !!}
                                        </span>
                                        <div class="flex flex-wrap justify-between mt-auto">
{{--                                            <div class="flex items-center">--}}
{{--                                                <div class="w-8 h-8 rounded">--}}
{{--                                                    <img class="w-full h-full overflow-hidden object-cover rounded object-center" src="assets/images/users/avatar-1.jpg" alt="logo" />--}}
{{--                                                </div>--}}
{{--                                                <div class="ml-2">--}}
{{--                                                    <a tabindex="0" class="cursor-pointer hover:text-gray-500 focus:text-gray-500 text-gray-800 dark:text-gray-100 focus:outline-none focus:underline"><h5 class=" font-medium text-sm">Fitbit Incorporation</h5></a>--}}
{{--                                                    <p tabindex="0" class="focus:outline-none text-gray-500 dark:text-gray-400 text-xs font-medium">San Diego, California</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <a href="{{ route('journals.show', $journal->id) }}" class="block text-slate-500 dark:text-slate-400 hover:text-slate-600 underline decoration-1 decoration-dashed underline-offset-4  decoration-primary-500 font-medium  focus:outline-none self-center">Read More <i data-lucide="arrow-right" class="self-center inline-block ms-1 h-4 w-4"></i></a>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div> <!--end card-->
                        @empty
                            <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4">
                                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                <div class="col-span-12 sm:col-span-6  md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                                    <img src="/assets/images/placeholders/neon-4.jpg" alt="" class="max-w-full h-auto rounded-xl">
                                </div><!--end col-->
                                <div class="col-span-12 sm:col-span-6  md:col-span-8 lg:col-span-8 xl:col-span-8 ">
                                    <div class=" h-full flex flex-col p-3">
                                        <div class="w-full block">
                                            <span class="text-[12px] bg-pink-500/10 text-pink-500 dark:text-pink-600 rounded font-medium py-1 px-2 inline-block mb-3">Helth</span>
                                            <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">{{ now()->diffForHumans() }}</span>
                                        </div>
                                        <a href="#" class="text-[20px] md:text-3xl lg:text-3xl xl:text-[32px] leading-[30px] mb-5 md:mb-0 font-spectral font-semibold  text-gray-800 dark:text-slate-200 block">
                                            No journal created yet...
                                        </a>
                                        <div class="flex flex-wrap justify-between mt-auto">
{{--                                            <div class="flex items-center">--}}
{{--                                                <div class="w-8 h-8 rounded">--}}
{{--                                                    <img class="w-full h-full overflow-hidden object-cover rounded object-center" src="assets/images/users/avatar-1.jpg" alt="logo" />--}}
{{--                                                </div>--}}
{{--                                                <div class="ml-2">--}}
{{--                                                    <a tabindex="0" class="cursor-pointer hover:text-gray-500 focus:text-gray-500 text-gray-800 dark:text-gray-100 focus:outline-none focus:underline"><h5 class=" font-medium text-sm">Fitbit Incorporation</h5></a>--}}
{{--                                                    <p tabindex="0" class="focus:outline-none text-gray-500 dark:text-gray-400 text-xs font-medium">San Diego, California</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <a href="" class="block text-slate-500 dark:text-slate-400 hover:text-slate-600 underline decoration-1 decoration-dashed underline-offset-4  decoration-primary-500 font-medium  focus:outline-none self-center">Read More <i data-lucide="arrow-right" class="self-center inline-block ms-1 h-4 w-4"></i></a>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end col-->
                            </div><!--end grid-->
                            </div> <!--end card-->
                        @endforelse
                        <div class="w-full pt-8 max-w-[160px]">
                            <a href="{{ route('journals') }}" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Load more</a>
                        </div>
                    </div><!--end col-->
                    <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-3 ">
                        <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                            <span class="font-medium border-b border-dashed border-pink-400 dark:text-slate-200">Call for Papers</span>
                        </div>

                        <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                            <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12">
                                <div class="animate-text-slide bg-white dark:bg-gray-800/40 backdrop-blur-2xl rounded-2xl shadow-lg w-full relative p-4">
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
                                    <p aria-hidden="true">
                                        Scholars and Researchers in the academic community and other institutions are invited to submit their
                                        research articles for publication.
                                    </p>
                                </div> <!--end card-->
                            </div><!--end col-->
                        </div><!--end grid-->

                        <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                            <span class="font-medium border-b border-dashed border-pink-400 dark:text-slate-200">Partners</span>
                        </div>
                        <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                            <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                                <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative">
                                    <!-- IMAGE BRAND -->
                                    <img alt="logo" class="flex-shrink-0 object-cover object-center mx-auto rounded" src="{{ config('app.url')."/image/placeholder.png" }}">
                                </div> <!--end card-->
                            </div><!--end col-->
                        </div><!--end grid-->

                    </div><!--end col-->

                </div><!--end inner-grid-->
            </div><!--end container-->
        </div><!--end section-->
    </div><!--end Main-->


    <section class="">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-8 mx-auto">
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
