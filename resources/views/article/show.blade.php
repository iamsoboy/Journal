<x-guest-layout>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-16 mx-auto">
            <div class="mx-auto flex flex-wrap">
                <div class="lg:w-3/4 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0" x-data="{ tab: 'description', open: false, toggle() { this.open = ! this.open } }">
                    <h2 class="text-sm title-font text-gray-900 tracking-widest">{{ $article->journal->title }}</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{ $article->title }}</h1>
                    <div class="text-base font-semibold">
                        <p>E-ISSN: {{ $article->unique_code }}</p>
                        <p>P-ISSN: {{ $article->issn }}</p>
                        <p>DOI: {{ $article->doi }}</p>
                    </div>
                    <div class="flex mb-4 py-4">
                        <button class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1"
                                :class="{'text-indigo-500 border-indigo-500 hover:border-indigo-800': tab === 'description' }"
                                @click.prevent="tab = 'description'"
                        >
                            Description
                        </button>
                        <button class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1"
                                :class="{'text-indigo-500 border-indigo-500 hover:border-indigo-800': tab === 'author' }"
                                @click.prevent="tab = 'author'"
                        >
                            Author(s)
                        </button>
                        <button class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1"
                                :class="{'text-indigo-500 border-indigo-500 hover:border-indigo-800': tab === 'reference' }"
                                @click.prevent="tab = 'reference'"
                        >
                            References
                        </button>
                    </div>
                    <div x-show="tab === 'description'" class="py-8">
                        <p class="leading-relaxed">{!! $article->abstract !!}</p>
                    </div>
                    <div x-show="tab === 'author'" class="py-8">
                        <p class="leading-relaxed">{{ $article->authors }}</p>
                    </div>
                    <div x-show="tab === 'reference'" class="py-8">
                        <p class="leading-relaxed">{{ $article->references }}</p>
                    </div>

                    <div class="flex border-t border-gray-200 py-2">
                        <span class="text-gray-600">Keyword(s)</span>
                        <span class="ml-auto text-gray-900">{{ $article->keywords }}</span>
                    </div>
                    <div class="flex border-t border-gray-200 py-2">
                        <span class="text-gray-600">About the Journal</span>
                        <span class="ml-auto text-gray-900">{{ $article->journal->volume }}, {{ $article->journal->issue }}</span>
                    </div>
                    <div class="flex border-t border-b mb-6 border-gray-200 py-2">
                        <span class="text-gray-600">Quantity</span>
                        <span class="ml-auto text-gray-900">4</span>
                    </div>
                    <div class="flex">
                        @if($article->cost)
                        <span class="title-font font-medium text-2xl text-gray-900">$ {{ number_format($article->cost) }}</span>
                        @endif
                        <a target="_blank" href="{{ config('app.url')."/storage/".$article->attachment }}" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Download Article</a>
                        <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <img alt="ecommerce" class="lg:w-1/4 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://dummyimage.com/400x400">
            </div>
        </div>
    </section>
</x-guest-layout>
