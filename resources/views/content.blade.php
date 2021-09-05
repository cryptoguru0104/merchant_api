<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>
    <div class="container max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
        <a href="/create" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">--New--</a>
    </div>

    @foreach ($contents as $content)

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2 class="text-header font-bold text-gray-900">
                            <a href="/content/{{ $content->id }}/edit" class="text-x1 font-bold text-blue-500">
                                {{ $content->title }}
                            </a>
                        </h2>

                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        <p class="text-md text-gray-600">{{ $content->content }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">{{ $pagename }}-page</div>
</x-app-layout>
