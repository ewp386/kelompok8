<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit retail
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('retail.update', $retail->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id_retail" class="block font-medium text-sm text-gray-700">Nama</label>
                            <input type="text" name="id_retail" id="id_retail" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('id_retail', $retail->id_retail) }}" />
                            @error('id_retail')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                            <input type="text" name="email" id="email" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('email', $retail->email) }}" />
                            @error('email')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="notelpon" class="block font-medium text-sm text-gray-700">No Telpon</label>
                            <input type="text" name="notelpon" id="notelpon" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('notelpon', $retail->notelpon) }}" />
                            @error('notelpon')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="alamat" class="block font-medium text-sm text-gray-700">Alamat</label>
                            <input type="text" name="alamat" id="alamat" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('alamat', $retail->alamat) }}" />
                            @error('alamat')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
