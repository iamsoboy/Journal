<x-guest-layout>
    <div class="flex flex-col">
        <div class="relative w-full py-[10px]">
            <div class="container z-1">
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                    <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-9 ">
                        <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl rounded-2xl shadow-sm w-full relative p-4 mb-4">
                            <div class="flex justify-between">
                                <p class="dark:text-slate-200">
                                    <span class="font-medium text-2xl text-green-700 uppercase border-b border-dashed border-green-400">{{ $journal->title }} </span><br>
                                    <span class="font-medium text-lg">ISSN: {{ $journal->issn }} </span><br>
                                    <span class="font-medium text-lg">ESSN: {{ $journal->unique_code }} </span><br>
                                    <span class="font-bold text-lg">@if($newJournals->isNotEmpty()) Archives @else Current Issues @endif  </span>
                                </p>
                            </div>
                        </div>

                        @if($newJournals->isNotEmpty())
                        <!--Current Issues -->
                        <div class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                            <div x-data="{ tab: 'description', open: false, toggle() { this.open = ! this.open } }">
                                @foreach($newJournals as $key => $articles)
                                    <h2 id="accordion-collapse-heading-1">
                                        <button type="button" class="flex items-center justify-between w-full p-2 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                                @click.prevent="tab = '{{$key}}'"
                                        >
                                            <span class="text-lg uppercase">{{ $key }}</span>
                                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                            </svg>
                                        </button>
                                    </h2>
                                    @foreach($articles as $article)
                                    <div x-show="tab === '{{$key}}'">
                                        <div class="p-0 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                            <a href="{{ config('app.url').'/storage/'.$article->attachment }}" target="_blank" class="px-2 text-red-800 font-bold dark:text-gray-400">{{ $article->title }}</a>
                                            <span class="px-2 italic text-blue-700 dark:text-gray-400">{{ $article->authors }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                @endforeach
                            </div>

                        </div>
                        <!--end card-->
                        @endif

                        @if($newJournals->isEmpty())
                        <!--Archive Issues -->
                        <div class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            @foreach($journal->articles as $article)
                            <div class="px-4 py-2 text-sm border border-b-2 rounded-lg dark:bg-gray-800 dark:text-blue-400" role="alert">
                                <a href="{{ config('app.url').'/storage/'.$article->attachment }}" target="_blank" class="font-bold text-red-800">{{ $article->title }}</a><br>
                                <span class="italic text-blue-700">{{ $article->authors }}</span>
                            </div>
                            @endforeach
                        </div>
                        @endif

                    </div><!--end col-->
                    <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-3 ">
                        <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                            <div class="flex flex-col rounded-md shadow-sm" role="group">
                                <a href="{{ route('current-issue', $journal->id) }}" type="button" class="no-underline uppercase px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 over:text-blue-800 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                                    Current Issues
                                </a>
                                <a href="{{ route('archive', $journal->id) }}" type="button" class="no-underline uppercase px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 hover:text-blue-800 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                                    Archives
                                </a>
                                <button type="button" class="px-4 py-2 text-sm font-medium uppercase text-gray-900 bg-transparent border border-gray-900 hover:text-blue-800 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                                    Manuscript Guidelines
                                </button>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                            <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                                <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4">
                                    <p>All Journals</p>
                                </div> <!--end card-->
                            </div><!--end col-->
                        </div><!--end grid-->

                    </div><!--end col-->

                </div><!--end inner-grid-->
            </div><!--end container-->
        </div><!--end section-->
    </div><!--end Main-->
</x-guest-layout>
