<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Transaksi
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('transaksi.update', $transaksi->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id_retail" class="block font-medium text-sm text-gray-700">Retail</label>
                            <select class="form-control select" style="width: 100%" name="id_retail" id="id_gudang">
                                <option disabled value>Pilih Retail</option>
                                @foreach ($retail as $data )
                                <option value="{{ $data->id }}" {{ $data->id == $transaksi->id_retail ? 'selected' : '' }}>{{  $data->id_retail }}</option>                                    
                                @endforeach
                            </select> 
                            @error('id_retail')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pembayaran" class="block font-medium text-sm text-gray-700">Pembayaran</label>
                            <select name="pembayaran" id="description" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                <option value="Lunas"{{ $transaksi->pembayaran == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                                <option value="Belum Lunas"{{ $transaksi->pembayaran == 'Belum Lunas' ? 'selected' : '' }}>Belum Lunas</option>
                            </select>
                            @error('pembayaran')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="jumlah" class="block font-medium text-sm text-gray-700">Total Harga/$</label>
                            <input type="text" name="jumlah" id="jumlah" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('jumlah', $transaksi->jumlah) }}" />
                            @error('jumlah')
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
