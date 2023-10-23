<x-guest-layout>

    <section>
        <!-- SLIDER START-->
        <div class="h-[639px] relative mb-5 z-10 mx-auto max-w-[1030px]">
            <!-- Hero Slider -->
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative overflow-hidden rounded-lg h-[639px]">
                @forelse($sliders as $key => $slider)
                    <!-- Item {{$slider->id }} -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ config('app.url').'/storage/'.$slider->image }}" class="absolute block h-[639px] w-[540px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="{{ $slider->title }}">
                        </div>
                @empty
                <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://dummyimage.com/720x400" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                @endforelse
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-blue-700/30 dark:bg-gray-800/30 group-hover:bg-blue-700/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-blue-700/30 dark:bg-gray-800/30 group-hover:bg-blue-700/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>


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
                                <a href="{{ route('journals.show', $journal->id) }}" class="col-span-12 sm:col-span-6  md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                                    <img src="{{ config('app.url')."/storage/".$journal->image }}" alt="{{ $journal->title }}" class="max-w-full h-auto rounded-xl">
                                </a><!--end col-->
                                <div class="col-span-12 sm:col-span-6  md:col-span-8 lg:col-span-8 xl:col-span-8 ">
                                    <div class=" h-full flex flex-col p-3">
                                        <div class="w-full block">
                                            <span class="text-[12px] bg-pink-500/10 text-pink-500 dark:text-pink-600 rounded font-medium py-1 px-2 inline-block mb-3">{{ $journal->category->name ?? 'Uncategorized' }}</span>
                                            <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">{{ $journal->created_at }}</span>
                                        </div>
                                        <a href="{{ route('journals.show', $journal->id) }}" class="text-[20px] md:text-3xl lg:text-3xl xl:text-[32px] leading-[30px] mb-5 md:mb-0 font-spectral font-semibold  text-gray-800 dark:text-slate-200 block">
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
                        <div class="flex justify-between bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                            <span class="font-medium border-b border-dashed border-pink-400 dark:text-slate-200">Call for Papers</span>
                            <div class="px-2 py-1 text-xs font-medium leading-none text-center items-center justify-center text-white bg-red-600 rounded-full animate-pulse dark:bg-blue-900 dark:text-blue-200">new</div>
                        </div>

                        <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                            <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12">
                                <marquee direction="up" class="bg-white h-64 dark:bg-gray-800/40 backdrop-blur-2xl rounded-2xl shadow-lg w-full relative p-4 text-justify">
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
                                </marquee> <!--end card-->
                            </div><!--end col-->
                        </div><!--end grid-->

                        <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                            <span class="font-medium border-b border-dashed border-pink-400 dark:text-slate-200">Indexation</span>
                        </div>
                        <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                            <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                                <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative">
                                    <!-- IMAGE BRAND -->
                                    <img alt="logo" class="flex-shrink-0 object-cover object-center mx-auto rounded" src="{{ config('app.url')."/image/placeholder.png" }}">
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
                                    <img alt="logo" class="flex-shrink-0 object-cover object-center mx-auto rounded" src="{{ config('app.url')."/image/partners.png" }}">
                                </div> <!--end card-->
                            </div><!--end col-->
                        </div><!--end grid-->

                    </div><!--end col-->

                </div><!--end inner-grid-->
            </div><!--end container-->
        </div><!--end section-->
    </div><!--end Main-->


    <section class="text-gray-600 body-font">
        <div class="container px-5 py-6 mx-auto">
            <div class="flex flex-wrap w-full lg:mb-8 sm:mb-4">
                <div class="lg:w-1/2 w-full lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Latest Published Articles</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
{{--                    <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>--}}
            </div>

        <div x-data="{ tab: '{{$journalTitles->first()->id}}' }">
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-base font-bold text-center" role="tablist">
                    @forelse($journalTitles as $key => $journal)
                        <li :class="{ 'bg-blue-700 text-white': tab === '{{$journal->id}}' }" class="mr-2" role="presentation">
                            <button @click.prevent="tab = '{{$journal->id}}'" class="inline-block p-4 border-b-2 rounded-t-lg" type="button" role="tab">
                                {{\Illuminate\Support\Str::of($journal->title)->match("/\(([^\)]*)\)/")}}
                            </button>
                        </li>
                    @empty
                        <li class="mr-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
                        </li>
                    @endforelse
                </ul>
            </div>

            <div id="myTabContent">
                @forelse($articles as $article)
                    <div class="block rounded-lg p-2 mb-2 bg-gray-100 dark:bg-gray-800" role="tabpanel" x-show="tab === '{{$article->journal_id}}'">
                        <div class="flex justify-between">
                            <a href="{{ config('app.url').'/storage/'.$article->attachment }}" target="_blank">
                                <strong class="font-bold text-base text-gray-800 dark:text-white">{{ $article->title }}</strong>
                            </a>
                        </div>
                        <div class="text-sm text-gray-900 text-justify">
                            {!! \Illuminate\Support\Str::words($article->abstract, 40, '...') !!} <br>
                            <a href="{{ config('app.url').'/storage/'.$article->attachment }}" class="text-sm text-primary-600">{{ $article->authors }}</a>
                        </div>
                    </div>
                @empty
                    <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel">
                        <p class="text-sm text-gray-500 dark:text-gray-400">There are currently <strong class="font-medium text-gray-800 dark:text-white">NO PUBLISHED ARTICLES</strong>. Kindly check back later.</p>
                    </div>
                @endforelse
            </div>
        </div>

        </div>
    </section>

</x-guest-layout>
