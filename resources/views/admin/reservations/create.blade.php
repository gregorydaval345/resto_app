<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.reservations.index') }}"
                    class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white font-bold">
                    Go Back
                </a>
            </div>

            <div class="m-2 p-2 bg-slate-300 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="firstName" class="block text-sm font-medium text-gray-700">
                                First Name
                            </label>
                            <div class="mt-1">
                                <input type="text" id="firstName" name="firstName"
                                    class="block w-full appearance-none bg-white border  rounded-md py-2 px-3 text-base leading-normal transition duration--150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror">
                            </div>
                            @error('firstName')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="lastName" class="block text-sm font-medium text-gray-700">
                                Last Name
                            </label>
                            <div class="mt-1">
                                <input type="text" id="lastName" name="lastName"
                                    class="block w-full appearance-none bg-white border  rounded-md py-2 px-3 text-base leading-normal transition duration--150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror">
                            </div>
                            @error('lastName')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1">
                                <input type="email" id="email" name="email"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />

                            </div>
                            @error('email')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="tel_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <div class="mt-1">
                                <input type="text" id="tel_number" name="tel_number"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                            </div>
                            @error('tel_number')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="res_date" class="block text-sm font-medium text-gray-700"> Reservation Date
                            </label>
                            <div class="mt-1">
                                <input type="datetime-local" id="res_date" name="res_date"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('res_date')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="guest_number" class="block text-sm font-medium text-gray-700"> Guest Number
                            </label>
                            <div class="mt-1">
                                <input type="number" id="guest_number" name="guest_number"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('guest_number')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-6 p-4">
                            <button type="submit"
                                class="px-4 py-2 bg-blue-500 hover:bg-blue-700 rounded-lg text-white">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>
