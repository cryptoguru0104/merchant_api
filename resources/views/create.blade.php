<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          Template 1!
        </div>
      </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
        </div>
      </div>
    </div>
  </div>
  <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 blog-section padding-top padding-bottom">

    <div class="flex justify-center">
      <div class="w-8/12 bg-white p-6 rounded-lg">
        <form method="POST" action="/content">
          @csrf
          <div class="mb-4">
            <label for="title" class="sr-only">title</label>
            <input name="title" id="title" cols="30" class="bg-gray-100 border-2 w-full
                          p-4 rounded-lg @error('content') border-red-500 @enderror" placeholder="Title">
            @error('')
              <div class="text-red-500 mt-2 text-2m">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-4">
            <label for="content" class="sr-only">content</label>
            <textarea name="content" id="content" cols="30" rows="4" class="bg-gray-100 border-2 w-full
                          p-4 rounded-lg @error('content') border-red-500 @enderror " placeholder="Content"></textarea>
            @error('content')
              <div class="text-red-500 mt-2 text-2m">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Create</button>
            <a href="/content" class="bg-gray-500 text-white px-4 py-2 rounded font-medium">Cancel</a>

          </div>
        </form>
      </div>
    </div>
    </section>
</x-app-layout>
