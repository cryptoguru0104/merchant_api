<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    </h2>
  </x-slot>
  <div class="container max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
    <div class="mb-5 flex justify-between">
      <h1 class="text-3xl">Features</h1>
      <a href="{{ route('features.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded font-medium inline-block">Add New</a>
    </div>
    
    <style>
      table tr td:nth-child(11) {
        min-width: 250px;
      }
      table tr td:last-child {
        min-width: 100px;
      }
    </style>
    <div style="overflow-x:auto;">
      <table class="w-full border shadow-lg rounded">
        <thead>
          <tr class="bg-gray-50 border-b">
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
              <div class="flex items-center justify-center">
                ID
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4">
                  </path>
                </svg>
              </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
              <div class="flex items-center justify-center">
                Imdb_ID
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4">
                  </path>
                </svg>
              </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
              <div class="flex items-center justify-center">
                Youtube_link
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4">
                  </path>
                </svg>
              </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
              <div class="flex items-center justify-center">
                Poster_image
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4">
                  </path>
                </svg>
              </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
              <div class="flex items-center justify-center">
                Background_image
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4">
                  </path>
                </svg>
              </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
              <div class="flex items-center justify-center">
                Title
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4">
                  </path>
                </svg>
              </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
              <div class="flex items-center justify-center">
                Year
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4">
                  </path>
                </svg>
              </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
              <div class="flex items-center justify-center">
                Rating
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4">
                  </path>
                </svg>
              </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
              <div class="flex items-center justify-center">
                Length
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4">
                  </path>
                </svg>
              </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
              <div class="flex items-center justify-center">
                Genre
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4">
                  </path>
                </svg>
              </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
              <div class="flex items-center justify-center">
                Short_desc
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4">
                  </path>
                </svg>
              </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
              <div class="flex items-center justify-center">
                Entry_user_id
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4">
                  </path>
                </svg>
              </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
              <div class="flex items-center justify-center">
                Entry_date
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4">
                  </path>
                </svg>
              </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
              <div class="flex items-center justify-center">
                Action
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4">
                  </path>
                </svg>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($features as $feature)
          <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
            <td class="p-2 border-r">{{ $feature->id }}</td>
            <td class="p-2 border-r">{{ $feature->imdb_id }}</td>
            <td class="p-2 border-r">{{ $feature->youtube_link }}</td>
            <td class="p-2 border-r">{{ $feature->poster_img }}</td>
            <td class="p-2 border-r">{{ $feature->bg_img }}</td>
            <td class="p-2 border-r">{{ $feature->title }}</td>
            <td class="p-2 border-r">{{ $feature->year }}</td>
            <td class="p-2 border-r">{{ $feature->rating }}</td>
            <td class="p-2 border-r">{{ $feature->length }}</td>
            <td class="p-2 border-r">{{ $feature->genre }}</td>
            <td class="p-2 border-r">{{ $feature->short_desc }}</td>
            <td class="p-2 border-r">{{ $feature->entry_user_id }}</td>
            <td class="p-2 border-r">{{ $feature->entry_date }}</td>
            <td class="p-2 border-r flex">
              <form action="{{ route('features.edit', $feature->id) }}" method="GET">
                <input class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin rounded" type="submit" value="Edit" />
                @csrf
            </form>
              <form action="{{ route('features.destroy', $feature->id) }}" method="POST">
                <input class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin rounded" type="submit" value="Delete" />
                @method('delete')
                @csrf
            </form>
              {{-- <a href="{{ route('features.destroy', $feature->id) }}" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin rounded">Delete</a> --}}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</x-app-layout>
