<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Transaksi Item
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('transaksi_item.update', $transaksi_item->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="user_id" class="block font-medium text-sm text-gray-700">ID User</label>
                            <input type="text" name="user_id" id="user_id" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('user_id', $transaksi_item->user_id) }}" />
                            @error('user_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id_retail" class="block font-medium text-sm text-gray-700">ID Retail</label>
                            <input type="text" name="id_retail" id="id_retail" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('id_retail', $transaksi_item->id_retail) }}" />
                            @error('id_retail')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id_barang" class="block font-medium text-sm text-gray-700">ID Barang</label>
                            <input type="text" name="id_barang" id="id_barang" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('id_barang', $transaksi_item->id_barang) }}" />
                            @error('id_barang')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id_transaksi" class="block font-medium text-sm text-gray-700">ID Transaksi</label>
                            <input type="text" name="id_transaksi" id="id_transaksi" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('id_transaksi', $transaksi_item->id_transaksi) }}" />
                            @error('id_transaksi')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="quantity" class="block font-medium text-sm text-gray-700">Quantity</label>
                            <input type="text" name="quantity" id="quantity" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('quantity', $transaksi_item->user_id) }}" />
                            @error('quantity')
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