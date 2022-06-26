<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Barang
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('barang.update', $barang->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Nama</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', $barang->name) }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="harga" class="block font-medium text-sm text-gray-700">Harga</label>
                            <input type="text" name="harga" id="harga" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('harga', $barang->harga) }}" />
                            @error('harga')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="quantity" class="block font-medium text-sm text-gray-700">Quantity</label>
                            <input type="text" name="quantity" id="quantity" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('quantity', $barang->quantity) }}" />
                            @error('quantity')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id_user" class="block font-medium text-sm text-gray-700">ID User</label>
                            <input type="text" name="id_user" id="quantity" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('id_user', $barang->user_id) }}" />
                            @error('id_user')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id_kategori" class="block font-medium text-sm text-gray-700">ID Kategori</label>
                            <input type="text" name="id_kategori" id="id_kategori" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('id_kategori', $barang->id_kategori) }}" />
                            @error('id_kategori')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="stock" class="block font-medium text-sm text-gray-700">Stock</label>
                            <input type="text" name="stock" id="stock" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('stock', $barang->stock) }}" />
                            @error('id_kategori')
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