<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.menus.index') }}"
                    class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white font-bold">
                    Go Back
                </a>
            </div>

            <div class="m-2 p-2 bg-slate-300 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.menus.update', $menu->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">
                                Name
                            </label>
                            <div class="mt-1">
                                <input type="text" id=" name" name="name" value="{{ $menu->name }}"
                                    class="block w-full appearance-none bg-white border  rounded-md py-2 px-3 text-base leading-normal transition duration--150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror">
                            </div>
                            @error('name')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="image" class="block text-sm font-medium text-gray-700"> Image </label>
                            <div>
                                <img class="w-32 h-32" src="{{ Storage::url($menu->image) }}" alt="">
                            </div>
                            <div class="mt-1">
                                <input type="file" id="image" name="image"
                                    class="block w-full appearance-none bg-white border rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                            </div>
                            @error('image')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <div class="mt-1">
                                <textarea id="description" rows="3" name="description"
                                    class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm rounded-md @error('name') border-red-400 @enderror">
                                    {{ $menu->description }}
                                </textarea>
                            </div>
                            @error('description')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="price" class="block text-sm font-medium text-gray-700"> Price </label>
                            <div class="flex mt-1">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    $
                                </span>
                                <input type="number" id="price" name="price" min="0.00" max="10000.00"
                                    value="{{ $menu->price }}" step="0.01"
                                    class="block w-full appearance-none bg-white border rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                            </div>
                            @error('image')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6 pt-5">
                            <label for="categories" class="block text-sm font-medium text-gray-700">Categories</label>
                            <div class="mt-1">
                                <select id="categories"n name="categories[]" class="form-multiselect block w-full mt-1"
                                    multiple>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @selected($menu->
                                            categories->contains($category))>{{ $category->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            @error('categories')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-6 p-4">
                            <button type="submit"
                                class="px-4 py-2 bg-blue-500 hover:bg-blue-700 rounded-lg text-white">Update</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>
