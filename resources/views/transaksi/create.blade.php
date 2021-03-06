<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Transaksi
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('transaksi.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id_retail" class="block font-medium text-sm text-gray-700">Retail</label>
                            <select class="form-control select" style="width: 100%" name="id_retail" id="id_gudang">
                                <option disabled value>Pilih Retail</option>
                                @foreach ($retail as $transaksi )
                                <option value="{{ $transaksi->id }}">{{  $transaksi->id_retail }}</option>                                    
                                @endforeach
                            </select> 
                            @error('id_retail')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pembayaran" class="block font-medium text-sm text-gray-700">Pembayaran</label>
                            <select name="pembayaran" id="pembayaran" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                <option value="Lunas">Lunas</option>
                                <option value="Belum Lunas">Belum Lunas</option>
                            </select>
                            @error('pembayaran')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="total_harga" class="block font-medium text-sm text-gray-700">Total Harga/$</label>
                            <input type="text" name="total_harga" id="total_harga" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('total_harga', '') }}" />
                            @error('total_harga')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
